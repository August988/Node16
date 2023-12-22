<!DOCTYPE html>
        <!--script id="Functions" type="text/jscript">
        function insertContent(id)
        {
                try
                {
                window.external.Insert("http://api.node16.xyz/asset/?id=" + id);
                }
                catch(x)
                {
                    alert("Could not insert the requested item");
                }          
        }
        function dragRBX(id)
        {
            try
                {
                    window.external.StartDrag("http://api.node16.xyz/asset/?id=" + id);
                }
                catch(x)
                {
                    alert("Sorry Could not drag the requested item");
                }
        }
        function clickButton(e, buttonid)
        {
          var bt = document.getElementById(buttonid);
          if (typeof bt == 'object')
          {
            if(navigator.appName.indexOf("Netscape")>(-1))
              
            {
              if (e.keyCode == 13)
              {
                bt.click();
                return false;
              }
            }
            if (navigator.appName.indexOf("Microsoft Internet Explorer")>(-1))
            {
              if (event.keyCode == 13)
              {
                bt.click();
                return false;
              }
            }
          }
        }
        </script-->
<html>
  <head>
    <title>Toolbox</title>  
    <link rel="stylesheet" href="http://meb.ct8.pl/static/css/Toolbox.css">
    <script>
      var ToolboxSearchType = "Models";
      var ToolboxItems = document.getElementById("ToolboxItems");
      var XMLParser = new DOMParser();
      var xmlDoc;
      
      function httpGet(theUrl)
      {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
        xmlHttp.send( null );
        return xmlHttp.responseText;
      }
      
      // Handle the inserting
      function InsertContent(id)
      {
        try
        {
          window.external.Insert("http://api.node16.xyz/asset/?id="+id"&version=1") // This is the API that Roblox uses for toolbox insert.
        }
        catch(err)
        {
          alert("Failed to insert NODE16 asset "+id+" :( [Error: "+err+"]")
        }
      }
      function DragAsset(id)
      {
        try
        {
          window.external.StartDrag("http://api.node16.xyz/asset/?id="+id"&version=1") // This is the API that Roblox uses for toolbox insert.
        }
        catch(_)
        {
          alert("Failed to drag NODE16 asset "+id+" into game :( [Error: "+err+"]")
        }
      }
      
      // Toolbox kewl items
      //function RefreshToolbox()
      //{
        //ToolboxItems = httpGet("https://api.node16.xyz/IDE/GetToolboxItems.ashx");
        //alert(ToolboxItems);
        //xmlDoc = XMLParser.parseFromString(ToolboxItems, "text/xml");
        //var XMLItems = xmlDoc.getElementsByTagName("Item");
        
        //for (let i = 0; i < XMLItems.length; i++) {
          //var Name = XMLItems[i].childNodes[0].nodeValue;
          //var Image = XMLItems[i].childNodes[2].nodeValue;
          //var AssetID = XMLItems[i].childNodes[3].nodeValue;
          //ToolboxItems.innerHTML = ToolboxItems.innerHTML + '<div class="ToolboxItem WithoutVoting" id="span_setitem_' + AssetID + '" ondragstart="javascript:DragAsset(' + AssetID + ')"><a href="javascript:InsertContent(' + AssetID + ')" class="itemLink" title="' + Name + '"><img alt="' + Name + '" id="img_span_setitem_' + AssetID + '" src="/static/images/unapprove-60x62.Png" border="0px" style="height:62px;width:60px;" onerror="return Roblox.Controls.Image.OnError(this)">' + Name + '</a></div>';
        //}
      //}
      
      // Toolbox kewl dropdown functions
      function DropdownMenu()
      {
        var SearchMenu = document.getElementById("SearchMenu");
        var ActiveOption = document.getElementById("activeOption");
        ActiveOption.className = "btn-dropdown-active";
        
        if (SearchMenu.className == "menu")
        {
          
          SearchMenu.className = "menu invisible";
        }
        else
        {
          SearchMenu.className = "menu";
        }
      }
      
      function UpdateDropdown(name)
      {
        var ActiveOption = document.getElementById("activeOption");
        var SearchMenu = document.getElementById("SearchMenu");
        ToolboxSearchType = name;
        ActiveOption.innerHTML = name;
        ActiveOption.className = "btn-dropdown";
        
        SearchMenu.className = "menu invisible";
        //RefreshToolbox();
        ToolboxItems = httpGet("https://node16.xyz/IDE/GetToolboxItems.ashx");
        alert(ToolboxItems);
      }
    </script>
  </head>
  <body class="Page" style="margin: 0;">
        <input name="__RequestVerificationToken" type="hidden" value="6_eZHOjUPq8Jhw66Ug0so8DxlG33_rZY0TrLaXEc7aMbOKqRbphTsdZWYh_pBl5ud60toqWtjSAZmQHQU93ZLxukFYLaUIRjFnWCQD57CiwhlECKHNRU2ejI5FDEhDWcZ1Ru3g2">
  <div id="NewToolboxContainer" data-isuserauthenticated="false" data-isdecalcreationenabled="true" data-requesturl="http://www.roblox.com/asset/" data-isrecentlyinsertedassetenabled="true">
            <div id="ToolboxControls">
                <div id="SetTabs">
                    <div id="Inventory" class="Tabs">Inventory</div>
                    <div id="Search" class="Tabs Selected">Search</div>
                </div>
                <div id="ToolboxSelector">
                    <span class="toolboxDisplayText" style="display: none;">Display: </span>
                    <select id="ddlSets" class="Toolboxes" style="min-width: 135px; display: none;"><optgroup label="ROBLOX Sets"><option value="464140">Game Stuff</option><option value="464138">Baseplates</option><option value="464131">Weapons</option><option value="463266">Vehicles</option><option value="458339">Bricks</option><option value="360380">Basic Buil...</option><option value="360378">Advanced B...</option><option value="360375">House Kit</option><option value="360372">House Inte...</option><option value="360371">Landscape</option><option value="360369">Castle Kit</option><option value="360365">Castle Int...</option><option value="360363">Space Kit</option><option value="360362">Fun Machines</option><option value="360360">Deadly Mac...</option></optgroup></select>
                    <div id="SearchList" class="SetList SetOptions hidden" style="float: left; min-width: 58px; display: block;">
                        <a href="javascript:DropdownMenu()" id="activeOption" class="btn-dropdown" data-value="FreeModels">Models</a>
                        <span class="dropdownImg"></span>
                        <div class="clear"></div>
                        <div class="SetListDropDown">
                            <div class="SetListDropDownList">
                                <div id="SearchMenu" class="menu invisible"><a href="javascript:UpdateDropdown('Models')" data-value="FreeModels" class="searchListOption">Models</a><a href="javascript:UpdateDropdown('Decals')" data-value="FreeDecals" class="searchListOption">Decals</a><a href="javascript:UpdateDropdown('Sets')" data-value="Sets" class="searchListOption">Sets</a></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div id="ToolboxSearch" class="hidden" style="display: block;">
                        <input type="text" id="tbSearch" title="Search" class="Search greyText">
                        <div id="Button" class="ButtonText"></div>
                    </div>
                </div>
            </div>
            <div id="ToolBoxScrollWrapper" style="height: 904px;">
                <div id="Filters" class="searchFilter hidden" style="display: block;">
                    <span class="filterText">Sort by: </span>
                    <select name="SortList" id="SortList" class="Toolboxes" style="float:none;min-width: 103px">
                        <option value="Relevance">Relevance</option>
                        <option value="MostTaken">Most Taken</option>
                        <option value="Favorites">Favorites</option>
                        <option value="Updated">Updated</option>
                    </select>
                </div>
                <div id="ResultStatus" class="hidden" style="display: none;"></div>
                <div id="Navigation" class="Navigation hidden">
                </div>
              <div id="ToolboxItems">
                <!--<div class="ToolboxItem WithoutVoting" id="span_setitem_300221">   
                  <a href="javascript:OpenSetModel('A Roblox Set', 'Free', 'This is a test set from simple.', 45783)" class="itemLink" title="A Test Set">
                    <img alt="A Test Set" id="img_span_setitem_300221" src="/static/images/unapprove-60x62.Png" border="0px" style="height:62px;width:60px;" onerror="return Roblox.Controls.Image.OnError(this)">
                    A Test Set
                  </a>
                </div>-->
                <div class="ToolboxItem WithoutVoting" id="span_setitem_300221" ondragstart="javascript:DragAsset(53326)">   
                  <a href="javascript:InsertContent(53326)" class="itemLink" title="Netural Spawn Location">
                    <img alt="Netural Spawn Location" id="img_span_setitem_300221" src="http://meb.ct8.pl/static/images/unapprove-60x62.Png" border="0px" style="height:62px;width:60px;" onerror="return Roblox.Controls.Image.OnError(this)">
                    Netural Spawn Location
                  </a>
                </div>
                
              </div>
              <div class="ToolboxSetPage" style="display: none;">
                <div class="ToolboxMainSetPage"> 
                  <img alt="Thumbnail" src="http://meb.ct8.pl/static/img/unapprove-60x62.Png" border="0px" style="height:102px;width:100px;">
                  <h3> RBLX </h3>
                  <p> qwerty </p>
                  
                </div>
              </div> 
              
              </div>
                <div id="ShowMore" class="Navigation hidden" style="clear: both; display: none;">
                    <div id="showMoreNext">
                        <a id="showMoreButton" class="btn-control btn-control-small" style="cursor:pointer;margin-left: 2px;">Show More</a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            if (typeof ClientToolbox === "undefined") {
                ClientToolbox = {};
            }

            ClientToolbox.Resources = {
                //<sl:translate>
                models: "Models",
                recentModels: "Recent models",
                recentDecals: "Recent decals",
                myModels: "My Models",
                myDecals: "My Decals",
                decals: "Decals",
                mySets: "My Sets",
                mySubscribedSets: "My Subscribed Sets",
                robloxSets: "ROBLOX Sets",
                noSets: "No sets are available",
                setsError: "An error occured while retrieving sets",
                results: "Results",
                loading: "Loading...",
                noResults: "No results found.",
                error: "Error Occurred.",
                errorData: "An error occured while retrieving this data",
                insertError: "Could not insert the requested item",
                dragError: "Sorry Could not drag the requested item",
                noVotesYet: "No votes yet",
                endorsedAsset: "A high-quality item",
                //</sl:translate>
                endorsedIcon: "http://images.rbxcdn.com/a98989e47370589a088675aaca5eaab8.png"
            };
        </script>
  

</body></html>