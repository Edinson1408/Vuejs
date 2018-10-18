<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css" />-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.js"></script>
    
</head>
<body>
    <main id='app'>

    <h2>{{mensaje}}</h2>
    <input type="text" v-model="mensaje">
    <!--con vanilla
    <input type="text">
    -->
    </main>
</body>
</html>
<script>

new Vue({
    el:'#app',
    data:{
        mensaje:'hola mundo',
    }
})

/* vanilla js
const input=document.querySelector('input');
h2=document.querySelector('h2');
input.addEventListener('keyup',()=>h2.innerHTML=input.value) 
*/
    

</script>