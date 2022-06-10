<?php
    session_start();
    if(!$_SESSION['profile'] ) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_profile.css">
    <title>diplom</title>
</head>
<body>
    <div class="wrapper_profile">
        <aside class="slidebar">
            <div class="slidebar_function">
                <img src="./img/logo_profile.png" alt="logo" class="logo_profile">
                <p><?=$_SESSION['profile']['name_company'] ?></p>
                <p><?=$_SESSION['profile']['tel_number'] ?></p>
            </div>
            <div class="slidebar_buttons">
                <button class="slidebar_buttons-link" onclick="changeTabs(event, 'firstSection')">Додати товар</button>

                <button class="slidebar_buttons-link" onclick="changeTabs(event, 'secondSection')">Список товарів</button>
                
                <button class="slidebar_buttons-link" onclick="changeTabs(event, 'thirdSection')">Закази</button>
                
                <button class="slidebar_buttons-link" onclick="changeTabs(event, 'forthSection')">Додати магазин</button>
                
            </div>
            <div class="exit"><a href="vendor/logout.php">Вихід</a></div>
        </aside>
        <section class="main_section" id="firstSection">
            <div class="main_section_header">
                <div class="main_section_header-name">Додати товар</div>
                <div class="main_section_header-logo"></div>
            </div>
            <div class="main_section_main">
                <div class="main_section_main-blocks block1">
                    <div class="main-blocks-name">Головна інформація</div>
                    <form action="">
                        <input id="file-input" type="file" name="file" multiple>
                        <label id="file-block" for="file-input" ></label>
                        <label>Назва</label>
                        <input type="product" name ='product'>
                        <label>Ціна</label>
                        <input type="product" name ='product'>
                        <div class="checkfloat">Кілограм<div class="checkbox"><div><input type="checkbox" ></div></div></div>
                        <div class="checkfloat">Грам<div class="checkbox"><div><input type="checkbox" > </div></div></div>
                        <div class="checkfloat">Упаковка<div class="checkbox"><div><input type="checkbox" > </div></div></div>
                        <div class="checkfloat">Штука<div class="checkbox"><div><input type="checkbox" > </div></div></div>
                    </form>
                </div>
                <div class="main_section_main-blocks block2">
                    <div class="main-blocks-name">Харчова цінність</div>
                    <form id = "flex_start" action="">
                        
                        <label>Калорійність</label>
                        <input type="product" name ='product'>
                        <label>Калорійність</label>
                        <input type="product" name ='product'>
                        <label>Калорійність</label>
                        <input type="product" name ='product'>
                        <label>Калорійність</label>
                        <input type="product" name ='product'>
                        
                    </form>
                </div>
                <div class="main_section_main-blocks block3">
                    <div class="main-blocks-name">Загальна інформація</div>
                    <form id = "flex_start" action="">
                        
                        <label>Країна виробник</label>
                        <input type="product" name ='product'>
                        <label>Торгова марка</label>
                        <input type="product" name ='product'>
                        <label>Час придатності</label>
                        <input type="product" name ='product'>
                        <label>Час придатності</label>
                        <input type="product" name ='product'>
                        <button type='button' style = 'max-width:335px; margin-top:150px' onclick="addProduct()">Додати товар</button>
                    
                    </form>
                </div>
            </div>
        </section>
        <section class="main_section" id="secondSection">
            <div class="main_section_header">
                <div class="main_section_header-name">Список товарів</div>
                <div class="main_section_header-logo"></div>
            </div>
            <div class="main_section_main">
                <div class="main_section_main-blocks block1">
                    <div class="main-blocks-name">Продукти</div>
                    <div class="main-blocks_catalog">
                        <div class="main-blocks_catalog-product" id = 'grid_catalog'>
                            <div class="product_main-info">
                                <div class="main-info_text">
                                    <img src="/img/pizza.png" alt="" class="product_ico">
                                    <div class="info_text-column">
                                        <div class="product_date" style = 'font-weight: 700; font-size: 12px; color: #B6B6B6; line-height: 17px;'>Дата розміщення: <br> 05.06.2022</div>
                                        <div class="product_name" style = 'font-size: 18px; line-height: 25px; color: #F8B505; font-weight: bold'>Піца</div>
                                        <div class="product_price" style = 'font-size: 18px;line-height: 25px; font-weight: bold'>150 грн / шт</div>
                                    </div>
                                </div>
                                
                                <input name="del" type="button" value="Видалити"/>
                                <a href="" class="red" >Редагувати</a>
                                
                            </div>
                            <div class="product_main-info">
                                <div class="main-info_text">
                                    <img src="/img/tomat.png" alt="" class="product_ico">
                                    <div class="info_text-column">
                                        <div class="product_date" style = 'font-weight: 700; font-size: 12px; color: #B6B6B6; line-height: 17px;'>Дата розміщення: <br> 29.05.2022</div>
                                        <div class="product_name" style = 'font-size: 18px; line-height: 25px; color: #F8B505; font-weight: bold'>Томати</div>
                                        <div class="product_price" style = 'font-size: 18px;line-height: 25px; font-weight: bold'>46 грн / кг</div>
                                    </div>
                                </div>
                                
                                <input name="del" type="button" value="Видалити"/>
                                <a href="" class="red" >Редагувати</a>
                                
                            </div>
                            <div class="product_main-info">
                                <div class="main-info_text">
                                    <img src="/img/apple.png" alt="" class="product_ico" style='margin-bottom:25px'>
                                    <div class="info_text-column">
                                        <div class="product_date" style = 'font-weight: 700; font-size: 12px; color: #B6B6B6; line-height: 17px;'>Дата розміщення: <br> 02.06.2022</div>
                                        <div class="product_name" style = 'font-size: 18px; line-height: 25px; color: #F8B505; font-weight: bold'>Яблука</div>
                                        <div class="product_price" style = 'font-size: 18px;line-height: 25px; font-weight: bold'>30 грн / кг</div>
                                    </div>
                                </div>
                                
                                <input name="del" type="button" value="Видалити"/>
                                <a href="" class="red" >Редагувати</a>
                                
                            </div>
                            <div class="product_main-info">
                                <div class="main-info_text">
                                    <img src="/img/pizza2.png" alt="" class="product_ico">
                                    <div class="info_text-column">
                                        <div class="product_date" style = 'font-weight: 700; font-size: 12px; color: #B6B6B6; line-height: 17px;'>Дата розміщення: <br> 07.06.2022</div>
                                        <div class="product_name" style = 'font-size: 18px; line-height: 25px; color: #F8B505; font-weight: bold'>Піца гавайська</div>
                                        <div class="product_price" style = 'font-size: 18px;line-height: 25px; font-weight: bold'>170 грн / шт</div>
                                    </div>
                                </div>
                                
                                <input name="del" type="button" value="Видалити"/>
                                <a href="" class="red" >Редагувати</a>
                                
                            </div>
                            <div class="product_main-info" >
                                <div class="main-info_text">
                                    <img src="/img/melon.png" alt="" class="product_ico">
                                    <div class="info_text-column">
                                        <div class="product_date" style = 'font-weight: 700; font-size: 12px; color: #B6B6B6; line-height: 17px;'>Дата розміщення: <br> 05.06.2022</div>
                                        <div class="product_name" style = 'font-size: 18px; line-height: 25px; color: #F8B505; font-weight: bold'>Кавун</div>
                                        <div class="product_price" style = 'font-size: 18px;line-height: 25px; font-weight: bold'>6 грн / кг</div>
                                    </div>
                                </div>
                                
                                <input name="del" type="button" value="Видалити"/>
                                <a href="" class="red" >Редагувати</a>
                                
                            </div>    
                            <script>var ul = document.getElementById("grid_catalog").firstElementChild;
                            function addProduct() {
                                var htmlCode = "<div class='product_main-info'><div class='main-info_text'><img src='/img/product.png' alt='' class='product_ico'><div class='info_text-column'><div class='product_date' style = 'font-weight: 700; font-size: 12px; color: #B6B6B6; line-height: 17px;'>Дата розміщення: <br> 05.06.2022</div><div class='product_name' style = 'font-size: 18px; line-height: 25px; color: #F8B505; font-weight: bold'>Яблука</div><div class='product_price' style = 'font-size: 18px;line-height: 25px; font-weight: bold'>30 грн / кг</div></div></div><input name='del' type='button' value='Видалити'/><a href='' class='red' >Редагувати</a></div>";
                                ul.insertAdjacentHTML('afterEnd', htmlCode);
                            }</script>
                            <!-- <script>
                            var els = document.getElementsByName("del");
                            els.forEach(function(item) {
                                item.addEventListener("click", function(){
                                    item.parentNode.parentNode.removeChild(item.parentNode);
                                });
                            });
                            </script> -->
                        </div>
                    </div>




                </div>
            </div>
        </section>
        <section class="main_section" id="thirdSection">
            <div class="main_section_header">
                <div class="main_section_header-name">Закази</div>
                <div class="main_section_header-logo"></div>
            </div>
            <div class="main_section_main">
                <div class="main_section_main-blocks block1">
                    <div class="zakaz_block">
                        <div class="zakaz_block-products">
                            <h3 class="zakaz_block-products_name">Заказ №3465</h3>
                            <div class="zakaz_block-products-grid">
                                <div class="products-grid-item">
                                    <img src="/img/pizza.png" alt="product">
                                    <div class="item_name">Піца</div>
                                    <div class="item_count">1 шт</div>
                                </div>
                                <div class="products-grid-item">
                                    <img src="/img/pizza2.png" alt="product">
                                    <div class="item_name">Піца</div>
                                    <div class="item_count">2 шт</div>
                                </div>
                                <div class="products-grid-item">
                                    <img src="/img/apple.png" alt="product"  style='margin-top:15px'>
                                    <div class="item_name" style='margin-top:12px'>Яблуко</div>
                                    <div class="item_count">3 кг</div>
                                </div>
                                <div class="products-grid-item">
                                    <img src="/img/pizza.png" alt="product">
                                    <div class="item_name">Піца</div>
                                    <div class="item_count">1 кг</div>
                                </div>
                                <div class="products-grid-item">
                                    <img src="/img/tomat.png" alt="product">
                                    <div class="item_name">Помідори</div>
                                    <div class="item_count">2 кг</div>
                                </div>
                                <div class="products-grid-item">
                                    <img src="/img/melon.png" alt="product">
                                    <div class="item_name">Кавун</div>
                                    <div class="item_count">1 шт</div>
                                </div>
                                <div class="products-grid-item">
                                    <img src="/img/apple.png" alt="product"  style='margin-top:15px'>
                                    <div class="item_name" style='margin-top:12px'>Яблуко</div>
                                    <div class="item_count">2 кг</div>
                                </div>
                                <div class="products-grid-item">
                                    <img src="/img/pizza.png" alt="product">
                                    <div class="item_name">Піца</div>
                                    <div class="item_count">1 шт</div>
                                </div>
                                <div class="products-grid-item">
                                    <img src="/img/tomat.png" alt="product">
                                    <div class="item_name">Помідори</div>
                                    <div class="item_count">3 кг</div>
                                </div>
                            </div>
                        </div>
                        <div class="zakaz_block-info">
                            <div class="block-info_title" style = "font-weight: 700; font-size: 22px; line-height: 30px;">Умови заказу</div>
                            <div class="block-info_main-info">
                                <div class="block-info_main-info_item">Адреса
                                    <p>Вул. Незалежності, 6</p>
                                </div>
                                <div class="block-info_main-info_item item_top">Спосіб оплати
                                    <p>Готівка</p>
                                </div>
                                <div class="block-info_main-info_item item_top">Спосіб доставки
                                    <p>Доставка кур'єром</p>
                                </div>
                            </div>
                            <div class="info_weight" style = 'font-size: 14px;line-height: 17px;color: #B6B6B6;'>Вага кошику: 4кг</div>
                            <div class="main_price" style = "font-weight: 700; font-size: 19px; line-height: 25px;">Загальна вартість:</div>
                            <div class="item_name">750 грн</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main_section" id="forthSection">
            <div class="main_section_header">
                <div class="main_section_header-name">Додати магазин</div>
                <div class="main_section_header-logo"></div>
            </div>
            <div class="main_section_main add_form">
                <div class="main_section_main-blocks block1">
                    <div class="main-blocks-name"></div>
                    <div class="wrapper" style = 'padding: 160px 0px 160px 0px;'>
                            <form action="" method="post">
                                <h1>Додавання магазину</h1>
                                <label>Назва компанії</label>
                                <input type="name_company" name='name_company'>
                                <label>Номер телефону</label>
                                <input type="tel_number" name='tel_number' id= "phone"  required>
                                <button type='button' class='button_add-document' style='background: #FBDA82; color: black'>Додати документи</button>
                                <button type='submit' style= 'margin-top:15px'>Додати</button>
                                <div class="checkbox" style = 'margin-top:15px'><div><input type="checkbox" required>Я приймаю умови користувальницької <a href=""><span style="color: #F8B505 ;">оферти</span></a></div></div>
                            </form>
                    </div>
                </div>
        </section>
    </div>

    <script src = 'js/script.js'></script>
    <script src = 'js/remove.js'></script>
</body>
</html>