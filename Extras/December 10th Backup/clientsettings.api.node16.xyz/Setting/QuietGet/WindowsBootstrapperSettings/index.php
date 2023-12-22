<?php
    header("Content-Type: application/json");
    $CurrPage = $_SERVER["REQUEST_URI"];
    
    $Bootstrapper = [
    "NeedInstallBgTask" => false,
    "NeedRunBgTask" => false,
    "IsPreDeployOn" => false,
    "PreVersion" => "",
    "ForceSilentMode" => false,
    "CountersLoad" => 100,
    "EnableWebRedirect" => true,
    "LaunchWithLegacyFlagEnabled" => 100,
    "PerModeLoggingEnabled" => true,
    "BetaPlayerLoad" => 100,
    "CountersFireImmediately" => true,
    "ExeVersion" => "0.202.0.61121",
    "ValidateInstalledExeVersion" => false,
    "UseNewCdn" => true,
    "UseFastStartup" => true,
    "CheckIsStudioOutofDate" => true,
    "ShowInstallSuccessPrompt" => true];
    
    $encodedBootstrapper = json_encode($Bootstrapper, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
    
    die($encodedBootstrapper);
?>