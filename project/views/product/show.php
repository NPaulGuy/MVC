<h1>Продукт <?= $product['name']; ?></h1>
<p>
 	Цена: <?= $product['price']; ?>$, количество: <?= $product['quantity']; ?>
</p>
<p>
	Стоимость (цена * количество): <?= $product['price'] * $product['quantity']; ?>$
</p>
<p>
	Описание : <?= $product['description']; ?>
</p>