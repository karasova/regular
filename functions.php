<?php 
    function format($filename){

        if (preg_match("/\.([a-z]+)$/", trim($filename), $matches))
            return $matches[1];
        else 
            return "Invalid filename";
        
    }

    function check($file){
        if (preg_match("/[a-z0-9а-я]+\.([a-z]+)$/", trim($file), $matches)){
            if (preg_match("/(zip|rar|tz|gzip)/", $matches[1]))
                return "Aрхив";
            if (preg_match("/(mp3|webm|temp|midi)/", $matches[1]))
                return "Аудиофайл";
            if (preg_match("/(mp4|mov|avi|vob)/", $matches[1]))
                return "Видеофайл";
            if (preg_match("/(jpg|png|tiff|bmp)/", $matches[1]))
                return "Картинка";

            return "Такого формата нет в словаре";
        }
        else
            return "Invalid filename";
    }

    function ex3($file){
        if (preg_match("~<title>(.+)</title>$~", $file, $matches))
            return $matches[1];
        else 
            return "В файле нет html-заголовков";
    }

    function ex4($file){
        if(preg_match_all("~<a(.+)>(.+)</a>~", $file, $matches)){
            $str = '';
            for ($i=0; $i < count($matches[1]); $i++)
            { 
                $str .= $matches[1][$i];
                $str .= "\n";
            }
            if (preg_match_all("~href=(?:\"|')+(.+?)(?:\"|')+~", $str, $matches1))
            { 
                for($i=0;$i<count($matches1[1]);$i++){ 
                    return $matches1[1][$i]."\n"; 
                }
            } 
        } 
        else 
            return "В файле нет html-заголовков";
    }

    function ex5($file){
        if(preg_match_all("~<img(.+)>~", trim($file), $matches)){
            $str = '';
            for ($i=0; $i < count($matches[1]); $i++)
            { 
                $str .= $matches[1][$i];
                $str .= "\n";
            }
            if (preg_match_all("~src=(?:\"|')+(.+?)(?:\"|')+~", $str, $matches1))
            { 
                for($i=0;$i<count($matches1[1]);$i++){ 
                    return $matches1[1][$i]."\n"; 
                }
            } 
        } 
        else 
            return "В файле нет html-заголовков";
    }

    function ex6($file, $str){
        $text = "<strong>".$str."</strong>";
	    if (preg_match("/$str/", $file)){
            return preg_replace("/$str/", $text, $file);
	    }
	    return "Нет сходства";
        
    }

    function ex7($file){
	    $file = preg_replace("/\:\)/", "<img src='smile.png' alt=':)' height='25 px'>", $file);
	    $file = preg_replace("/\;\)/", "<img src='wink.png' alt=';)' height='25 px'>", $file);
	    $file = preg_replace("/\:\(/", "<img src='sad.png' alt=':(' height='25 px'>", $file);
        return $file;  
        
    }

    function ex8($file){
	    $file = preg_replace("/\s+/", " ", $file);
        return $file;          
    }

