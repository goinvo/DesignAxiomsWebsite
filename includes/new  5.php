<?php 
    $string = "<?xml version='1.0' encoding='utf-8'?>\n"; 
    $string.= "<rss version='2.0'>\n"; 
    $string.= "<channel>\n"; 
    $string.= "<title>Project2 RSS Feed - Phillip Sobus</title>\n"; 
    $string.= "<language>en-us</language>\n"; 
    $string.= "<link>http://people.rit.edu/pxs2271/539/project2/project2.rss</link>\n"; 
    $string.= "<description>Project 2 RSS Feed</description>\n"; 
 
    $doc = new DomDocument(); 
     $doc->load('./external/news.xml'); 
     $articleList = $doc->getElementsByTagName('article'); 
    $count = 1; 
 
     foreach($articleList as $domNode) 
     { 
          $entry = $domNode->getElementsByTagName('content')->item(0)->nodeValue;      
        $subject = $domNode->getElementsByTagName('title')->item(0)->nodeValue;      
        $timestamp = $domNode->getAttribute('date'); 
 
        if($count <= 10) 
        { 
            $string.= "<item>\n"; 
            $string.= "<title>$subject</title>\n"; 
            $string.= "<link>http://people.rit.edu/pxs2271/539/project2/news.php</link>\n"; 
            $string.= "<description><![CDATA[$entry]]></description>\n"; 
            $string.= "<pubDate>$timestamp</pubDate>\n"; 
            $string.= "</item>\n"; 
        } 
        $count++; 
    } 
 
    $string.= "</channel>\n"; 
    $string.= "</rss>\n"; 
 
    $f = fopen("project2.rss", "w");  
    fwrite($f, $string);  
    fclose($f);  
?>