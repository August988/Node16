<?php
header("content-type: application/xml");
error_reporting(0);
$method = $_GET['method'];
switch($method) {
  case "IsFriendsWith":
    echo '<Value Type="boolean">false</Value>';
    break;
  case "IsBestFriendsWith":
    echo '<Value Type="boolean">false</Value>';
    break;
  case "IsInGroup":
    echo '<Value Type="boolean">true</Value>';
    break;
  case "GetGroupRank":
    echo '<Value Type="integer">100</Value>';
    break;
  case "GetGroupRole":
    echo '<Value Type="string"></Value>';
    break;
  case "getAdminIcon":
    echo '<Value Type="string"></Value>';
    break;
  default:
    echo '<Value Type="string">Invalid method</Value>';
    break;
};
?>