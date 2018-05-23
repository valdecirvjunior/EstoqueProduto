<html>
	<head>
	  <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
	  <link rel="icon" href="favicon/favicon.png" />
	  <link rel="stylesheet" href="css/index.css">
	  <link rel="stylesheet" href="css/boot.css">
	  <link rel="stylesheet" href="css/fonts.css"> 
	  <script src="js/jquery.js"></script>  
	</head>
	<body>
		<header>
			<div class="menu">
				<div class="conteudo-center-970">
					<a class=logo></a>
				</div>
			</div>
		</header>
		<main>
			<div class="menu-lateral">
				<a class="seletor s1" href=".conteudo-1">
					<div class="vetor-1"></div>
					<p>CADASTRO</p>
				</a>
				<a class="seletor s2" href=".conteudo-2">
					<div class="vetor-2"></div>
					<p>CADASTRO DE PRODUTOS</p>
				</a>
				<a class="seletor s3" href=".conteudo-3">
					<div class="vetor-3"></div>
					<p>ESTOQUE</p>
				</a>
				<a class="seletor s4" href=".conteudo-4">
					<div class="vetor-4"></div>
					<p>PONTO DE VENDA</p>
				</a>
			</div>
			<div class="conteudo-1 on">
				<div class="conteudo-center-970">
					<form class="formulario-footer-padrao-3" method="post" action="#">
						<input type="hidden" name="email">
						<input type="text" name="nome" placeholder="NOME" required="required" id ="nome">
						<input type="text" name="sbnome" placeholder="SOBRENOME" required="required" id ="sbnome">
						<input type="text" name="telefone" placeholder="TELEFONE">
						<input type="text" name="cep" placeholder="CEP" required="required" maxlength="9" onblur="pesquisacep(this.value);">
						<input type="text" name="uf" placeholder="UF" required="required" id ="uf">
						<input type="text" name="cidade" placeholder="Cidade" required="required" id ="cidade">
						<input type="text" name="bairro" placeholder="Bairro" required="required" id ="bairro">
						<input type="text" name="rua" placeholder="RUA" required="required" id ="rua">
						<input type="text" name="numero" placeholder="Numero" required="required" id ="numero">							
						<div class="engloba-botoes">
							<button>Salvar</button>
							<button>Cancelar</button>
						</div>
					</form>
				</div>
			</div>
			<div class="conteudo-2 off">
				<div class="conteudo-center-970">
					<form class="formulario-footer-padrao-3" method="post" action="#">
						<input type="hidden" name="email">
						<input type="text" name="codigo" placeholder="CÓDIGO" required="required" id ="cod">
						<input type="text" name="nome-produto" placeholder="NOME" required="required" id ="nome-produto">
						<input type="text" name="descricao" placeholder="DESCRIÇÃO">
						<div class="vetor-seletor"></div>
						<input type="file" name="img" class="seletor-img">
						<div class="engloba-botoes">
							<button>Salvar</button>
							<button>Cancelar</button>
						</div>
					</form>
				</div>
			</div>
			<div class="conteudo-3 off">
			<table class="table-estoque">
  <tr>
	<th>Imagem</th>
    <th>Código</th>
    <th>Nome</th>
    <th>Descrição</th>
  </tr>
  <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
    <tr>
	<td class="img-produto"></td>
    <td><p>01</p></td>
    <td><p>IPHONE</p></td>
    <td><p>smartphone</p></td>
  </tr>
</table>

			</div>
			<div class="conteudo-4 off"></div>
			<div class="conteudo-5 off"></div>
		</main>
		<footer>
			<div class="copy-sole">
        <div class="conteudo-center-970">
            <p class="c1">© 2018 |  DOM BOSCO | Todos os Direitos Reservados</p>
            <p class="c2"><b class="desenvolvido">Desenvolvido </b>by <i>Jeferson & Robson</i></a></p>
        </div>
		</div>
		</footer>	
			<script>
            $(document).ready(function () {
                $(".off").hide();
                $(".on").show();
                $('.seletor').click(function () {
                    var link = $(this).attr('href');
                    $('.on').hide().addClass('off').removeClass('on');
                    $(link).show().addClass('on');
                    $('.menu-lateral a').removeClass('ativo');
                    $(this).addClass('ativo');

                    return false;
                });
            });
	</script>
	</body>
</html>