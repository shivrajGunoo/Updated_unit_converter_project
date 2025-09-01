# PowerShell script to generate PHP pages from Excel data and a template using ImportExcel module

$folder_name = "Engineering_and_Technical _Conversions_Time"

# Parameters
$excelPath = "C:\xampp\htdocs\unitconverter\"+$folder_name+ "\Excel_config_php_parameters.xlsx"
$templatePHPPath = "C:\xampp\htdocs\unitconverter\"+$folder_name+ "\content_pages_template.php"
$outputFolder = "C:\xampp\htdocs\unitconverter\"+$folder_name

# Check if ImportExcel module is installed, install if not
if (-not (Get-Module -ListAvailable -Name ImportExcel)) {
    Write-Host "ImportExcel module not found, installing..."
    Install-Module -Name ImportExcel -Force -Scope CurrentUser
}

# Import the module
Import-Module ImportExcel

# Create output folder if it doesn't exist
if (-not (Test-Path -Path $outputFolder)) {
    New-Item -ItemType Directory -Path $outputFolder | Out-Null
}

# Read Excel data
try {
    $excelData = Import-Excel -Path $excelPath
} catch {
    Write-Host "Error reading Excel file: $_" -ForegroundColor Red
    exit
}

# Read template content
$templateContent = Get-Content -Path $templatePHPPath -Raw

# Process each row
foreach ($row in $excelData) {
    # Create a copy of the template for this row
    $currentContent = $templateContent
    
    # Get the page name for the output filename
    $pageName = $row.'##PAGE_NAME'
    if ([string]::IsNullOrEmpty($pageName)) {
        Write-Host "Skipping row - no page name specified"
        continue
    }
    
    # Replace all parameters in the template
    $row.PSObject.Properties | Where-Object { $_.Name -match "^##" } | ForEach-Object {
        $paramName = $_.Name
        $value = $_.Value
        if ($null -ne $value) {
            $currentContent = $currentContent -replace $paramName, $value.ToString()
        } else {
            $currentContent = $currentContent -replace $paramName, ""
        }
    }
    
    # Create output filename
    $outputPath = Join-Path -Path $outputFolder -ChildPath "$pageName"
    
    # Save the modified content
    $currentContent | Out-File -FilePath $outputPath -Encoding utf8
    Write-Host "Generated: $outputPath"
}

Write-Host "Processing complete!"