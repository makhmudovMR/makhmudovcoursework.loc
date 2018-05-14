<?php

class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	function generate($content_view, $template_view, $data = null, $split = false)
	{
		if($split){
            if(is_array($data)) {
                // преобразуем элементы массива в переменные
                extract($data);
            }
        }


		
		include ROOT."/app/views/".$template_view;
	}

	function page_generate($template_view, $data = null, $split = false)
    {
        if($split){
            if(is_array($data)) {
                // преобразуем элементы массива в переменные
                extract($data);
            }
        }



        include ROOT."/app/views/".$template_view;
    }
}