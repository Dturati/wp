<?php
function theme_data_setup()
{
//	$slider_image = WEBRITI_TEMPLATE_DIR_URI . "/images/desembarque.jpg";
	$slider_image = WEBRITI_TEMPLATE_DIR_URI . "/images/banner.jpeg";
	$service_image1 = WEBRITI_TEMPLATE_DIR_URI . "/images/palestrante1.jpeg";
//	$service_image2 = WEBRITI_TEMPLATE_DIR_URI . "/images/stalin.jpg";
//	$service_image3 = WEBRITI_TEMPLATE_DIR_URI . "/images/karl_marx.jpeg";
	$service_image4 = WEBRITI_TEMPLATE_DIR_URI . "/images/service3.jpg";
//	$portfolio_image1 = WEBRITI_TEMPLATE_DIR_URI . "/images/cemiterio.jpg";
//	$portfolio_image2 = WEBRITI_TEMPLATE_DIR_URI . "/images/abrigo.jpg";
//	$portfolio_image3 = WEBRITI_TEMPLATE_DIR_URI . "/images/bunker.jpg";
	$portfolio_image4 = WEBRITI_TEMPLATE_DIR_URI . "/images/hotel.jpg";
	
	return $theme_options=array(
			//Logo and Fevicon header					
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'250',
			'text_title'=>'on',
			'upload_image_favicon'=>'',
			'webrit_custom_css'=>'',
			
			//Featured Image Setting
			'home_banner_enabled'=>'on',
			'slider_title_one' => __('Clean & fresh theme','wallstreet'),
			'slider_title_two' => __('Welcome to WallStreet','wallstreet'),
			'slider_description' => __('State-of-the-art HTML5-powered flexible layout with lightspeed fast CSS3 transition effects. Works perfectly on any modern mobile device.','wallstreet'),
			'slider_image' => $slider_image,
			
			// service
			'service_section_enabled' => true,
			
			'service_image_one' => $service_image1, 
			'service_title_one'=> __('Alfredo da Mota Menezes - TV Centro América','wallstreet'),
			'service_description_one' => 'Possui graduação em História pela Faculdade de Filosofia Ciências e Letras de Franca, 
			(1968); graduação em Direito pela Faculdade de Direito de Franca (1969);
			 mestrado em História da América Latina pela Tulane University (1982) e PhD na mesma área pela Tulane University (1984). 
			 Pós-Doutorado na Tulane University, 1988-1989. Foi professor visitante no Departamento de História da Tulane, 1994, teve bolsa Capes. 
			 Foi professor Titular na UFMT. Publicou os livros: A Herança de Stroessner: Brasil-Paraguai, 1955-1980 (Papirus, 1987); 
			 este livro foi publicado no Paraguai como La Herencia de Stroessner (Carlos Schauman, 1990); Do Sonho à Realidade: a Integração Ecônomica Latino Americana (Alfa Omega, 1990); 
			 Guerra do Paraguai (Contexto, 1998); Integração Regional: os Blocos Econômicos nas Relações Internacionais, com Pio Penna (Campus/Elsevier, 2006); 
			 Momento Brasileiro: Do Fim do Regime Militar à Eleição do Lula (Gryphus, 2006) e a Morte de Totó Paes: Política no Interior do Brasil (Carlini & Caniato, 2007). Foi colunista no jornal A Gazeta/MT, atualmente é comentarista político na TV Centro América. 
			 Já escreveu cerca de dois mil artigos sobre temas diferentes. Os artigos podem ser acessados no site www.alfredomenezes.com.',
//
//			'service_image_two' => $service_image2,
//			'service_title_two'=> __('Palestrante Dois','wallstreet'),
//			'service_description_two' => "Como matar 10 milhoes de ucranianos de fome mesmo a ucrania sendo o país mais fértil da Europa. Uma abordagem na prática",
//
//			'service_image_three' => $service_image3,
//			'service_title_three'=> __('Palestrante Três','wallstreet'),
//			'service_description_three' => 'Como  ser um escritor de livros de fantasias e contos do seculo XIX. Palestra destinada ao público adolescente',

			'service_image_for' => $service_image4,
			'service_title_for'=> __('Responsive designs','wallstreet'),
			'service_description_for' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.',


		//portfolio
			'portfolio_section_enabled' => true,
			
//			'portfolio_title_one' => __('Normandia','wallstreet'),
//			'portfolio_description_one' => __('Aconchegante cemitério para descançar seus ossos.','wallstreet'),
//			'portfolio_image_one' => $portfolio_image1,
			
//			'portfolio_title_two' => __('Abrigo anti-aério','wallstreet'),
//			'portfolio_description_two' => __('Durma protegido dos bombardeios noturnos.','wallstreet'),
//			'portfolio_image_two' => $portfolio_image2,
			
//			'portfolio_title_three' => __('Bunker de frente ao mar','wallstreet'),
//			'portfolio_description_three' => __('Hotel Bunker de frente para o mar.','wallstreet'),
//			'portfolio_image_three' => $portfolio_image3,
			
			'portfolio_title_four' => __('Hotel central','wallstreet'),
			'portfolio_description_four' => __('Estamos em reforma.','wallstreet'),
			'portfolio_image_four' => $portfolio_image4,
			
			//Home blog
			'blog_section_enabled' => 'on',
			
			// Head Titles
			'contact_header_settings' => true,
			'contact_phone_number' => '1-800-123-789',
			'contact_email' => 'info@webriti.com',
			'service_title' => __('Our services','wallstreet'),
			'service_description' => __('We offer great services to our clients.','wallstreet'),
			'portfolio_title' => __('Featured portfolio project','wallstreet'),
			'portfolio_description' => __('Our most popular work','wallstreet'),
			'home_blog_heading'=> __('Our latest blog post','wallstreet'),
			'home_blog_description' => __('We work with new customers and grow their business.','wallstreet'),
			
			/** Social media links **/
			'header_social_media_enabled'=>'on',			
			'footer_social_media_enabled'=>'on',			
			'social_media_twitter_link' =>"#",			
			'social_media_facebook_link' =>"#",
			'social_media_googleplus_link' =>"#",
			'social_media_linkedin_link' =>"#",		
			'social_media_youtube_link' =>"#",
			
			/** footer customization **/
			'footer_copyright' =>sprintf (__('Copyright @ 2017 - Evento PMI<a href="%1$s" target="_blank"></a>.','wallstreet'),'http://www.webriti.com'),
		
		);
}
?>