<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurante Pereira</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/main-style.css">
    <script src="main-script.js"></script>
    

  </head>
  <body>
    <!-- Cabecalho   -->
    <header id="header">
      <nav class="container">
        <a class="logo" href="#">Restaurante<span> Pereira</span></a>
        <div class="menu">
          <ul class="grid">
            <li><a class="title" href="#home">Início</a></li>
            <li><a class="title" href="#about">Sobre</a></li>
            <li><a class="title" href="#menu">Menu</a></li>
            <li><a class="title" href="#services">Serviços</a></li>
            <li><a class="title" href="#contact">Contato</a></li>
            <li><a class="title" href="login.php">Login</a>
            <li><a class="title" href="signup.php">Registo</a>
          </ul>
        </div>
        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
      </nav>
    </header>

    <!-- Todas as páginas -->
    <main>
      <!-- Primeira página -->
      <section class="section" id="home">
        <div class="container grid">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGl6emF8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
              alt="Imagem de uma pizza saborosa"
            />
          </div>
          <div class="text">
            <h1>Venha conhecer a melhor pizza da cidade</h1>
            <p class="subtitle">Temos pizza de vários sabores !</p>
            <a class="button" href="#menu">Conheça nosso cardápio</a>
          </div>
        </div>
      </section>

      <div class="divider"></div>

      <!-- Segunda página -->
      <section class="section" id="about">
        <div class="container grid">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1622883618971-97068745dc6c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=731&q=80"
              alt="Mulher três caixas de pizza para delivery"
            />
          </div>
          <div class="text">
            <h2 class="title">Sobre Nós</h2>
            <p class="subtitle">
            No Restaurante Pereira, nos dedicamos a proporcionar uma experiência culinária excepcional para os apreciadores da boa comida. Localizado em uma localização privilegiada, nosso restaurante tem se destacado ao longo dos anos por oferecer pratos deliciosos, preparados com ingredientes frescos e de alta qualidade.
            </p>
            <br />
            <p class="subtitle">
            Nossa história começou há mais de 10 anos, quando um grupo de chefs talentosos se uniu para criar um lugar onde a gastronomia fosse valorizada e celebrada. Desde então, temos nos dedicado incansavelmente a aprimorar nossas receitas, técnicas de cozinha e apresentação dos pratos, resultando em uma experiência gastronômica verdadeiramente excepcional.
            </p>
            <br />
            <p class="subtitle">
            Acreditamos que a boa comida começa com ingredientes de qualidade. Por isso, trabalhamos em estreita colaboração com produtores locais e selecionamos cuidadosamente os melhores ingredientes sazonais para criar pratos que são uma explosão de sabores. Nossos chefs talentosos são mestres na combinação de ingredientes frescos e na criação de pratos que surpreendem e encantam o paladar.
            </p>
          </div>
        </div>
      </section>

      <div class="divider"></div>

<!-- Our Menus start -->
<section class="section" id="menu">
  <div class="container">
    <div class="section-header">
      <div class="section-tagline">
        Venha conhecer o nosso Menu!
      </div>
      <div class="section-title">
          Menu
      </div>
      <hr class="separator">
      
    </div>
    <div id="menus-picker">
      <div class="menu-categories">
        <ul>
          <li v-for = "menuCategory in menuCategories" v-bind:class="{ 'active' : menuCategory == currentTab}"
            @click="toggleTab(menuCategory)">
            {{ menuCategory }}
          </li>
        </ul>
        <div id="burgers" class="menu-tabs" v-bind:class="{ 'active_menu_tab' : 'Hambúrguers' == currentTab}">
          <div class="row">
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/doublecheeseburguer.jpg" alt="French Burger">
                </div>
                <h5>
                  Double Cheeseburguer
                </h5>
                <p class="menu_description">
                  Pão de hambúrguer, 2 carnes, 2 queijos, cebola, tomate, molho especial, alface e picles.
                </p>
                <div class="menu_price">
                  €12
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/vegetables-burger.jpeg" alt="Vegetables Burger">
                </div>
                <h5>
                  Normal Hambúrguer
                </h5>
                <p class="menu_description">
                  Pão, carne, alface, queijo cheddar, tomate, bacon e ovo.
                </p>
                <div class="menu_price">
                  €10
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/chiken.jpg" alt="Vincent Burger">
                </div>
                <h5>
                  Chiken Hambúrguer
                </h5>
                <p class="menu_description">
                  Pão, cebola, ketchup, cebola roxa, carne de frango e tomate.
                </p>
                <div class="menu_price">
                  €6,80
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/vegano.jpg" alt="Vegetables Burger">
                </div>
                <h5>
                 Vegano Hambúrguer
                </h5>
                <p class="menu_description">
                  Pão vegano, carne vegana e salada.
                </p>
                <div class="menu_price">
                  €9,40
                </div>
              </div>
            </div>

          </div>
        </div>
        <div id="desserts" class="menu-tabs" v-bind:class="{ 'active_menu_tab' : 'Sobremesas' == currentTab}">
          <div class="row">
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/cupcake.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Cupcake 
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €1
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/classic-chocolate-mousse.jpg" alt="Classic Chocolate Mousse">
                </div>
                <h5>
                  Mousse de Chocolate
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €5
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/bolo.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Brownie
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €3
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/panqueca.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Panqueca
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €2,50
                </div>
              </div>
            </div>

          </div>
        </div>
        <div id="drinks" class="menu-tabs" v-bind:class="{ 'active_menu_tab' : 'Bebidas' == currentTab}">
        <div class="row">
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/caipirinha.jpg" alt="Caipirinha">
                </div>
                <h5>
                  Caipirinha
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €4,50
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/toranja.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Toranja 
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €2
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/vinho.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Vinho
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €6
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/limonada.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Limonada
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €2,50
                </div>
              </div>
            </div>
        </div>
        </div>
        
        <div id="pasta" class="menu-tabs" v-bind:class="{ 'active_menu_tab' : 'Pasta' == currentTab}">
        <div class="row">
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/pasta2.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Macarrão com Camarão 
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €12
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/pasta1.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Macarrão com Salcicha
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €8
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/pasta3.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Macarrão com Natas 
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €10
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/pasta4.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Macarrão com Cogumelos
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €10,99
                </div>
              </div>
            </div>
        </div>
        </div>
        
        <div id="pizzas" class="menu-tabs" v-bind:class="{ 'active_menu_tab' : 'Pizzas' == currentTab}">
          <div class="row">
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/diablo-pizza.png" alt="Diablo Pizza">
                </div>
                <h5>
                  Pepperoni
                </h5>
                <p class="menu_description">
                  Pepperoni, queijo, cebola, azeitonas, cogumelos, molho de tomate.
                </p>
                <div class="menu_price">
                  €8
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/carbonara-pizza.png" alt="Carbonara Pizza">
                </div>
                <h5>
                  Carbonara Com Ovo
                </h5>
                <p class="menu_description">
                  Ovo, Queijo, Fiambre, Orégano, Coentro, Molho de tomate.
                </p>
                <div class="menu_price">
                  €10
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/margherita-pizza.png" alt="Margherita Pizza">
                </div>
                <h5>
                  Marguerita
                </h5>
                <p class="menu_description">
                  Queijo, Molho de tomate, Provolone, Parmesão e Cream Chese.
                </p>
                <div class="menu_price">
                  €8
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/prosciutto-pizza.png" alt="Prosciutto Pizza">
                </div>
                <h5>
                  Queijo e Bacon
                </h5>
                <p class="menu_description">
                  Queijo, Molho de tomate, Azeitonas, Bacon, Cogumelos, Coentro.
                </p>
                <div class="menu_price">
                  €11
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div id="salads" class="menu-tabs" v-bind:class="{ 'active_menu_tab' : 'Saladas' == currentTab}">
        <div class="row">
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/salada1.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Salada de Camarão
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €11
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu_block_item">
                <div class="menu_img">
                  <img src="images/salada2.jpg" alt="Trilogie de Verrines">
                </div>
                <h5>
                  Salada de Abacate
                </h5>
                <p class="menu_description">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio enim, ratione hic doloremque
                </p>
                <div class="menu_price">
                  €11
                </div>
              </div>
            </div>
           
            </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- Our Menus end -->
<div class="divider"></div>




      <!-- Terceira página -->
      <section class="section" id="services">
        <div class="container grid">
          <header>
            <h2 class="title">Serviços</h2>
            <p class="justify-text subtitle">
              Com mais de 10 anos no mercado, o Restaurante Pereira já conquistou clientes
              de inúmeros cidades oferecendo a melhor pizza da região.
            </p>
          </header>
          <div class="cards grid">

            <div class="card">
              <i class="icon-pizza-box"></i>
              <h3 class="title">Embalagem Resistente</h3>
              <p class="subtitle">
                Conheça nossas embalagens resistentes e que mantém sua comida
                sempre quentinha.
              </p>
            </div>

            <div class="card">
              <i class="icon-pizza-delivery"></i>
              <h3 class="title">Entrega Premium</h3>
              <p class="subtitle">
                A nossa equipe é repleta de profissionais treinados que irão
                proporcionar a melhor experiência na entrega da sua comida.
              </p>
            </div>

            <div class="card">
              <i class="icon-pizza-flavors"></i>
              <h3 class="title">Sabores</h3>
              <p class="subtitle">
                O Restaurante Pereira tem um cardápio repleto de sabores. Com diversos tipos de alimentos mas tendo como foco principal a venda de pizzas.
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="divider"></div>

      <!-- Quarta página -->
      <section class="section" id="contact">
        <div class="container grid">
          <div class="text">
            <h2 class="title">Entre em contato com a gente !</h2>
            <p class="subtitle">
              Entre em contato com a Pizzaria, queremos tirar suas dúvidas,
              ouvir suas críticas e sugestões.
            </p>

            <div class="align_button">
              <a
                class="button"
                href="https://api.whatsapp.com/send/?phone=351934583272&text&type=phone_number&app_absent=0"
                target="_blank"
              >
                <i class="icon-whatsapp"></i> Entrar em Contato
              </a>
            </div>
          </div>

          <div class="link">
            <ul class="grid">
              <li><i class="icon-phone"></i>934-583-272</li>
              <li><i class="icon-map-pin"></i>(Portugal) Urbanização Serra e mar, 43</li>
              <li><i class="icon-mail"></i>renanaugustolima@gmail.com</li>
            </ul>
          </div>
        </div>
      </section>
    </main>

    <div class="divider"></div>

    <!-- Rodapé -->
    <footer class="section">
      <div class="container grid">
        <div class="brand">
          <a class="logo logo-alt" href="#home">Restaurante<span> Pereira</span></a>
          <p>©2023 Pizza Pereira.</p>
          <p>Todos os direitos reservados.</p>
        </div>
        <div class="social">
          <a href="https://instagram.com" target="_blank"
            ><i class="icon-instagram"></i
          ></a>
          <a href="https://facebook.com" target="_blank"
            ><i class="icon-facebook"></i
          ></a>
          <a href="https://youtube.com" target="_blank"
            ><i class="icon-youtube"></i
          ></a>
        </div>
      </div>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
	<script src="js/main-script.js"></script>
    
  </body>
</html>
