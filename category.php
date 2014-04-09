<?php
// Instancia o Model das categorias
$basePath = JPATH_ADMINISTRATOR . '/components/com_categories';
require_once $basePath . '/models/category.php';
$config = array( 'table_path' => $basePath . '/tables');
$catmodel = new CategoriesModelCategory( $config);
 
// Cria um array com os dados da categoria
$catData = array(
'id' => 0, // Passe o valor zero, para o Joomla entender como novo registro.
'parent_id' => 21, // ID da categoria Pai, caso não tenha deixe 0
'level' => 2, // Caso essa categoria é uma filha e está em arvore, informe o nível que ela está
'path' => 'portfolios/portfolio-'.$user->username, // Parâmetro utilizado na URL Amigável
'extension' => 'com_content', // Informando que é uma categoria para artigos
'title' => 'Portfólio de '.$user->name, // Nome da categoria
'alias' => 'portfolio-'.$user->username, // Alias da categoria, para acesso via URL
'description' => '<p></p>', // Descrição da categoria
'published' => 1, // Caso esteja 1, a categoria está ativa e publicada
'language' => '*' // Informa a linguagem que essa categoria se refere, caso nenhum informe '*'
);
 
// Salva a categoria, e retorna se TRUE se gravou
$status = $catmodel->save( $catData);
?>
