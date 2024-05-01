<?
function render_map($map){
    $html = '<div class="map">';
         for ($ri = 0; $ri < 10; $ri++) { 
                 for ($ci = 0; $ci < 10; $ci++) { 
                    
                        $attributes = $map[$ri][$ci] == 1 ? 'class="ship sq"' : 'class="sq"';
                        $attributes .= "href=\"/?shoot={$ri}x{$ci}\""
                  
                 $html .= "<a$attributes></a>";

                 } 
            } 
       $html .=' </div>';


return $html;

}
?>