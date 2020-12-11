<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="./js/jquery.js"></script>
<script src="./js/slick.min.js"></script>
<script>

	let url_string = window.location.href;
	let url = new URL(url_string);
	let busca = url.searchParams.get("busca");

    let baseURL = 'https://api.themoviedb.org/3/';
    let configData = null;
    let baseImageURL = null;
    let apikey = '4ec327e462149c3710d63be84b81cf4f';
    
    // MovieDB API
    let getConfig = function (){
        let url = "".concat(baseURL, 'configuration?api_key=', apikey); 
        fetch(url)
        .then((result)=>{
            return result.json();
        })
        .then((data)=>{
            baseImageURL = data.images.secure_base_url;
            configData = data.images;
            console.log('config:', data);
            console.log('config fetched');
            runSearch(busca)
        })
        .catch(function(err){
            alert(err);
        });
    }
    
    let runSearch = function (keyword){
        let url = ''.concat(baseURL, 'search/movie?api_key=', apikey, '&query=', keyword);
        fetch(url)
        .then(result=>result.json())
        .then((data)=>{
        	const movies  = data.results;
		
			let baseURLImage = 'https://image.tmdb.org/t/p/';
        	let fileSize = 'w154';
        	let txt = '';
			txt+='<h3>Palavra pesquisada:'+busca+'</h3>';

		
        	for(var i = movies.length - 1; i >= 0; i--){

               	let title = movies[i].original_title;
             	let release = movies[i].release_date;
             	let overview = movies[i].overview;
    	       	let filePath = movies[i].poster_path;

                let urlImage = ''.concat(baseURLImage, fileSize, filePath);

                txt+='<div class="resultado-flex">'
                txt+='	<div class="resultado-single-banner">'
             	txt+='		<p><img src="'+urlImage+'" alt=""</p>';
             	txt+='	</div>'
        		txt+='<div class="resultado-list">'
                txt+='	<p>Título:'+title+'</p>';
                txt+='	<p>Data de Lançamento:'+release+'</p>';
	            txt+='	<p>Descrição:'+overview+'</p>';
	            txt+='</div>'
        	}
        	txt+='</div>';
            document.getElementById('output').innerHTML = txt;
            
        })
    }
    
    document.addEventListener('DOMContentLoaded', getConfig);
</script>

<?php

	include "page.php";
	
	if(isset($_GET['busca'])){
		$busca = $_GET['busca'];
	}

	if(isset($_GET['acao']) == 'Submit')
	{
	    echo '<section class="resultado" id="output"></section>';
	}
	else{
?>
		<section class="lista">
			<h2>Filmes Em Destaque</h2>
			<div class="lista-flex">
				<div class="lista-single-banner">
					<div class="lista-wrapper" style="background-image: url('images/arrow.jpg');"></div>
				</div>
				<div class="lista-single-banner">
					<div class="lista-wrapper" style="background-image: url('images/suits.jpeg');"></div>
				</div>
				<div class="lista-single-banner">
					<div class="lista-wrapper" style="background-image: url('images/arrow.jpg');"></div>
				</div>
				<div class="lista-single-banner">
					<div class="lista-wrapper" style="background-image: url('images/suits.jpeg');"></div>
				</div>
				<div class="lista-single-banner">
					<div class="lista-wrapper" style="background-image: url('images/arrow.jpg');"></div>
				</div>
				<div class="lista-single-banner">
					<div class="lista-wrapper" style="background-image: url('images/suits.jpeg');"></div>
				</div>
				<div class="lista-single-banner">
					<div class="lista-wrapper" style="background-image: url('images/arrow.jpg');"></div>
				</div>
			</div> <!-- lista flex -->
		</section> <!-- lista -->		
		<script>
			$('.lista-flex').slick({
				dots: false,
				arrows:false,
				infinite: false,
				centerMode: false,
				speed:1000,
				slidesToShow: 6,
		      	autoplay: true,
		      	autoplaySpeed: 3000,
		      	pauseOnHover:false,
		        responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        slidesToShow: 3
			      }
			  	}]
			});

			$('.lista-wrapper').hover(function(){
				$(this).css('z-index','1000');
			})

			$('.lista-wrapper').mouseout(function(){
				$(this).css('z-index','0');
			})
		</script>
<?php
}
?>	



</body>

</html>
