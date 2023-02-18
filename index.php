<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<title>Document</title>
</head>
<body>
	
		    <input type="text" id="num">
			<br><br>
			<button href="javascript:void(0)" onclick="klik()" > Generete Segitiga
			</button>
            <button href="javascript:void(0)" onclick="klik2()" > Generete bilangan Ganjil
			</button>
            <button href="javascript:void(0)" onclick="klik3()"> Generete Bilangan Prima
			</button>
            <br>
            <h2>Result :</h2>
         

	
	<div id="tampil_data"></div>
        <script>
             function klik(){
                var num=jQuery('#num').val();
                jQuery.ajax({
                    url : 'tampil_segitiga.php',
                    type : 'post',
                    data : 'num='+num ,
                    success : function(result){
                        $('#tampil_data').html(result);
                    }

                })
             }
             function klik2(){
                var num=jQuery('#num').val();
                jQuery.ajax({
                    url : 'tampil_bil_ganjil.php',
                    type : 'post',
                    data : 'num='+num ,
                    success : function(result){
                        $('#tampil_data').html(result);
                    }

                })
             }
             function klik3(){
                var num=jQuery('#num').val();
                jQuery.ajax({
                    url : 'tampil_bil_prima.php',
                    type : 'post',
                    data : 'num='+num ,
                    success : function(result){
                        $('#tampil_data').html(result);
                    }

                })
             }
        </script>

</body>
</html>
