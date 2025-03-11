<?php

// Recursive function to display the menu
function displayMenu($items, $parentId = 0, $isFirst = false)
{
    // Filter the items to find children of the current parent
    $children = children($items, $parentId);

    // If no children, return early
    if (empty($children)) {
        return;
    }

    $firstULClass = ($isFirst)?'elementor-nav-menu':'sub-menu elementor-nav-menu--dropdown';
    echo "<ul class='$firstULClass'>";
    foreach ($children as $child) {

        $cssClass = $child['cssClass'];
        $url = $child['url'];
        $hasChildren = children($items, $child['id']);
        $liHasChildrenClass = (!empty($hasChildren))?'menu-item-has-children':'';
        //$aHasChildrenClass = (!empty($hasChildren))?'elementor-item':'elementor-sub-item';
        if($isFirst){
            $aHasChildrenClass = (!empty($hasChildren))?'elementor-item has-submenu':'elementor-item';
        }else{
            $aHasChildrenClass = 'elementor-sub-item';
        }

        echo "<li class='menu-item $liHasChildrenClass $cssClass'>" .
            "<a href='$url' class='$aHasChildrenClass'>".htmlspecialchars($child['title'])."</a>";

        // Recursively call to display child menu items
        displayMenu($items, $child['id']);

        echo "</li>";
    }
    echo "</ul>";
}

function children($items, $parentId = 0):array{
    return array_filter($items, function ($item) use ($parentId) {
        return $item['parentId'] == $parentId;
    });
}
?>
