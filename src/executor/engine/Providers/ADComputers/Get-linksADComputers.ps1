if(Test-Connection 10.0.0.4 -Quiet){
    #Accessing Domain Controller via PSRemoting from computer not in the domain (therefore configuring trusted hosts)
    if(-not (Get-Item WSMan:\localhost\Client\TrustedHosts | % Value) -contains "10.0.0.4"){
        winrm s winrm/config/client '@{TrustedHosts="10.0.0.4"}'
    }

    $password = "Aa123456" | ConvertTo-SecureString -asPlainText -Force
    $username = "DSC\Administrator"
    $credential = New-Object System.Management.Automation.PSCredential($username,$password)

    Invoke-Command -ComputerName 10.0.0.4 {
$res = @"
ObjectGUID                 
objectSid                  
DistinguishedName          
IPv4Address                
IPv6Address                
PasswordLastSet            
OperatingSystem            
OperatingSystemHotfix      
OperatingSystemServicePack 
OperatingSystemVersion     
whenCreated                
servicePrincipalName       
"@ -split [environment]::NewLine | %{$_.trim()}
    Get-ADComputer -filter * -Properties $res | select -Property $res
    } -Credential $credential | ConvertTo-Json -Compress
}else{
    #relative path in links project folder
    Get-Content "src\executor\engine\Providers\ADComputers\ADComputersJSON.json"
}