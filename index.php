<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
                    <H3>descubra o Seculo apartir do ano </H3>
               
                    <label class="input-group-text" for="ano">Digite o Ano</label>
                    <input type="text" class="form-control" id="ano">
                    <button type='input' onclick="buscar()">Consultar</button>
                    
                    <div>--------------------------</div>
                    <div id='descricao'></div>
                    <div>-------------------------</div>
                    
                    <div>********************************************************************************************************************</div>
                    <H3>descubra o menor numero primo do digitado </H3>

                    <label class="input-group-text" for="primo">Digite o Numero</label>
                    <input type="text" class="form-control" id="primo">
                    <button type='input' onclick="buscarprimo()">Consultar</button>
                    <div>--------------------------------</div>
                    <div id='descricao_primo'></div>
                    <div>------------------------------</div>
  
                    <div>********************************************************************************************************************</div>
                    <H3>array multidimensional </H3>
                    <div>--------------------------------</div>
                    <div id='descricao_array'></div>
                    <div>------------------------------</div>

                    <div>********************************************************************************************************************</div>
                    <H3>array boolean nao foi feito</H3>
                   
</body>
<script>

function buscar(){

    $.ajax({
			url:'src/info.php',
			type:'POST',
			dataType:'JSON',
			data:{
				action  : 'seculo',
				ano     : $('#ano').val(),
			},
			success:function(data){
				$('#descricao').html('SECULO :'+data)
			},
        });

}

function buscarprimo(){

$.ajax({
        url:'src/info.php',
        type:'POST',
        dataType:'JSON',
        data:{
            action  : 'primo',
            primo     : $('#primo').val(),
        },
        success:function(data){
            $('#descricao_primo').html('O MENOR NUMERO PRIMO É :'+data)
        },
    });

}

array();
function array(){

$.ajax({
        url:'src/info.php',
        type:'POST',
        dataType:'JSON',
        data:{
            action  : 'function_array',
        },
        success:function(data){
            $('#descricao_array').html('O SEGUNDO MAIOR NUMERO É :'+data)
        },
    });

}

// array2();
// function array2(){

// $.ajax({
//         url:'src/info.php',
//         type:'POST',
//         dataType:'JSON',
//         data:{
//             action  : 'function_array2',
//         },
//         success:function(data){
//             $('#descricao_array_2').html(data)
//         },
//     });

// }



</script>



</html>