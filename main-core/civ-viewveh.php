<?php ${"G\x4c\x4f\x42\x41\x4c\x53"}["\x7a\x6b\x78\x63\x6b\x67x\x6c\x73"]="me\x73\x73\x61\x67\x65";${"G\x4c\x4f\x42\x41L\x53"}["\x6ci\x78\x69\x67r\x64w\x68"]="us\x65\x72\x5f\x75s\x65\x72\x6e\x61m\x65";${"\x47L\x4fB\x41L\x53"}["y\x6b\x77\x6au\x75\x75"]="\x75\x72\x6c\x5f\x6co\x67\x69\x6e";include"\x63\x6c\x61\x73ses/con\x66ig.\x70h\x70";session_start();if(!isset($_SESSION["\x75s\x65\x72_i\x64"])||!isset($_SESSION["\x6co\x67ge\x64_in"])){header("Loca\x74\x69on: ".${${"G\x4c\x4f\x42\x41L\x53"}["\x79k\x77juu\x75"]}."");exit();}include"cla\x73s\x65s/\x69sL\x6f\x67\x67\x65\x64\x49\x6e\x2ep\x68\x70";include"\x66\x75n\x63ti\x6f\x6e\x73/\x72ef\x72\x65s\x68Civ\x56\x61ri\x61ble\x73\x2e\x70\x68\x70";logme("V\x69\x65w\x69\x6e\x67\x20C\x68\x61\x72\x61\x63\x74\x65\x72 \x56ehic\x6c\x65",${${"GL\x4fBA\x4cS"}["\x6ci\x78\x69g\x72\x64\x77\x68"]});if(isset($_GET["\x6c\x69c\x65\x6ese"])&&strip_tags($_GET["l\x69\x63ens\x65"])==="\x69n\x76a\x6c\x69\x64"){${${"\x47\x4c\x4f\x42\x41L\x53"}["zkx\x63\x6b\x67x\x6c\x73"]}="<d\x69\x76 \x63\x6cas\x73=\"\x61\x6cer\x74\x20\x61l\x65\x72t-\x64ang\x65\x72\x22\x20\x72\x6f\x6c\x65\x3d\x22a\x6cer\x74\x22>\x49\x74 S\x65em\x73\x20You\x72 \x44ri\x76ers \x4ci\x63\x65\x6es\x65\x20\x49s\x20\x4e\x6ft \x56\x61l\x69d\x2e\x3c/\x64i\x76>";}elseif(isset($_GET["v\x65hicle"])&&strip_tags($_GET["\x76\x65\x68\x69cl\x65"])==="d\x65le\x74\x65d"){${${"G\x4c\x4f\x42\x41\x4cS"}["\x7a\x6b\x78\x63\x6b\x67\x78l\x73"]}="<d\x69\x76\x20\x63\x6c\x61ss\x3d\x22\x61\x6c\x65r\x74\x20\x61ler\x74-dan\x67\x65\x72\"\x20ro\x6ce\x3d\x22\x61l\x65r\x74\">\x56e\x68\x69\x63\x6c\x65 D\x65\x6c\x65\x74e\x64.</\x64\x69v\x3e";}
?>
<!DOCTYPE html>
<html>
<?php
$page_name = "Viewing Civilian";
include('includes/header.php')
?>
<script>
function showVeh(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","functions/getveh.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

   <body>
      <div class="container">
         <div class="main">
            <a href="<?php print $url_civ_view ?>?id=<?php echo $_SESSION['character_id'] ?>"><img src="https://hydrid.us/main-core/assets/imgs/dmv.png" class="main-logo" draggable="false"/></a>
            <div class="main-header">
               Hello, <?php echo $_SESSION['character_first_name'] ?>
            </div>
            <?php print($message); ?>
            <form>
              <select class="form-control" name="vehicles" onchange="showVeh(this.value)">
                <option selected="true" disabled="disabled">Select Vehicle</option>
                <?php ${"\x47L\x4f\x42A\x4cS"}["\x62\x63\x69\x73\x62\x6d\x79\x71\x69e"]="\x72\x6f\x77";${"G\x4cOB\x41\x4c\x53"}["tu\x6ax\x75\x79u\x73"]="\x72esu\x6c\x74";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x62me\x71\x7a\x65\x6dq\x6c"]="\x73\x74\x61\x74\x75s";${"GLOB\x41\x4cS"}["b\x66ab\x70\x76\x68x"]="g\x65\x74\x56\x65h";$wirlcp="c\x68a\x72\x5f\x69\x64";${${"\x47L\x4fB\x41\x4c\x53"}["b\x6d\x65q\x7ae\x6dql"]}="En\x61b\x6c\x65\x64";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x69i\x66\x65\x76\x76fb"]="g\x65\x74\x56e\x68";${$wirlcp}=$_SESSION["\x63h\x61ract\x65r_\x69d"];${${"GL\x4f\x42A\x4c\x53"}["\x62f\x61b\x70vh\x78"]}="\x53ELE\x43T * \x46\x52OM\x20veh\x69cl\x65s\x20W\x48E\x52E \x76\x65\x68\x69cl\x65\x5fo\x77\x6e\x65\x72\x3d'$char_id\x27\x20A\x4e\x44\x20vehicle_st\x61\x74\x75s=\x27$status\x27";${${"G\x4c\x4fBA\x4cS"}["\x74\x75\x6a\x78\x75\x79\x75\x73"]}=$pdo->prepare(${${"\x47\x4cOB\x41\x4cS"}["\x69ife\x76\x76\x66\x62"]});${"GL\x4f\x42\x41LS"}["\x66\x73\x74\x69\x64\x75o\x62t"]="\x72\x6f\x77";$result->execute();while(${${"G\x4c\x4fB\x41\x4cS"}["\x66\x73\x74\x69\x64\x75\x6f\x62t"]}=$result->fetch(PDO::FETCH_ASSOC)){echo"<\x6fpt\x69\x6fn\x20value=\"".${${"G\x4cO\x42\x41\x4c\x53"}["\x62\x63\x69sb\x6dy\x71i\x65"]}["\x76eh\x69\x63l\x65\x5f\x69d"]."\x22\x3e".${${"G\x4cOB\x41L\x53"}["\x62\x63\x69s\x62\x6dyq\x69\x65"]}["v\x65h\x69\x63\x6ce_mod\x65l"]." - ".${${"G\x4c\x4fB\x41\x4c\x53"}["b\x63i\x73\x62m\x79\x71i\x65"]}["\x76\x65h\x69\x63le\x5f\x70\x6cat\x65"]."</opt\x69\x6fn\x3e";}
?>
              </select>
            </form>

            <div id="txtHint"></div>
            <?php include('includes/hydrid.php') ?>
         </div>
      </div>
   </body>
</html>