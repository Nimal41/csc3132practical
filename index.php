<html>
<head>
    <style>
        li:hover{
            color:firebrick;
            background-color: blanchedalmond;
        }
    </style>
</head>
<body>
<?php

$productCategories = array(
    'Electronics' => array(
        'Smartphones' => array(
            'Apple' => array(
                'iPhone 13',
                'iPhone 12 Pro',
                'iPhone SE',
            ),
            'Samsung' => array(
                'Galaxy S21',
                'Galaxy Note 20',
                'Galaxy A52',
            ),
        ),
        'Laptops' => array(
            'Dell' => array(
                'XPS 13',
                'Inspiron 15',
            ),
            'HP' => array(
                'HP Spectre x360',
                'HP Pavilion' => array(
                    'Pavilion 15',
                    'Pavilion x360',
                    'Pavilion Gaming',
                ),
            ),
        ),
    ),
    'Clothing' => array(
        'Men' => array(
            'T-Shirts',
            'Jeans',
            'Suits',
        ),
        'Women' => array(
            'Dresses',
            'Shoes',
            'Handbags',
        ),
    ),
    'Home & Kitchen' => array(
        'Furniture' => array(
            'Sofas',
            'Tables',
            'Chairs',
        ),
        'Appliances' => array(
            'Refrigerators',
            'Microwaves',
            'Washing Machines',
        ),
    ),
);
function printArray($arr)
{
    foreach ($arr as $key => $item) {
        if(is_array($item)){
            echo "<ul>";
            echo "<li>".$key."</li>";
                echo "<ul>";
                printArray($item);
                echo "</ul>";
            echo "</ul>";
        }else{
            echo "<li>".$item."</li>";
        }
    }
}

printArray($productCategories);
?>
</body>
</html>