<html>
<head>
<title>Przykład z rysowaniem po siatce</title>
<style type="text/css">

</style>
<script type="text/javascript"
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
</script>
<script type="text/javascript">
$("#paleta td").each(
function( index ){
//przypisanie zdarzenia onClick
$( this ).bind (
"click",
function(){
aktywny_kolor = $(this).css("background-color");
$("#debug_kolor_palety").html("aktywny kolor palety to: " +
"<span style='width: 20px; height: 20px; background-color:"
+ aktywny_kolor
+ ";'>" + aktywny_kolor + "</span>");
}
);
});
$("#siatka td").each(
function( index ){
//przypisanie zdarzenia onClick
$( this ).bind (
"click",
function(){
$(this).css("background-color", aktywny_kolor);
}
);
});
});
</script>
</head>
<body>
<p><strong>Paleta kolorów:</strong></p>
<p><strong>Rysuj!</strong></p>
<table id="siatka" cellspacing="0">
</table>
<p><em>Konsola debugowania:&nbsp;</em></p>
<div id="debug_kolor_palety"></div>
</body>
</html>