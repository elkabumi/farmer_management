<div id="submit">ajax</div>
<div id="div_element"></div>
<script src="js/jquery.js"></script>
<script>
$('#submit').click(function(event){
   $("#div_element").load('ajax.php?sleep=3&html=helloooooo!'); 
       
});
</script> 