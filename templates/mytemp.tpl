{config_load file='myconfig.conf'}
<html>

<head>
    <title>{#title#}</title>

    <style>
    </style>
</head>

<body>


    <p>Example of html checkboxes :</p>
{html_checkboxes values=$check output=$check seperator='<br/>'}
    <p>Example of html radios :</p>
    {html_radios values=$radio output=$radio seperator='<br/>'}



    <p>Example of html Counter :</p>
    {counter}
    <p>Another Counter Below : </p>
    {counter}
    <p>Example of html cycle :</p>
    <ul>
    <li class="{cycle values ="green,yellow" loop=1}">List </li>
    </ul>


    <p>Example of Escape :</p>
    {$email|escape:'mail'}


    <p>Example of Concatenation :</p>
    str1={$var1}<br>
    str2={$var2}<br>
    
    {$var1|cat:$var2}



    <p>Example of Table 6 :</p>
   {for $new=1 to 10}
   {math equation="6*$new"}<br>
    {/for}
    



    <p>Array proper :</p>
    
   {foreach $data as $newdata}
    {$newdata|print_r}<br>
    {/foreach}
 

    <p>Perform on string : </p>
    <p>In Lower Case : </p>
    {$string1|lower}<br>
    {$string2|lower}
    <p>Replacing : </p>
    {$string1|replace:'ucertify' : 'uCertify'} <br>
    {$string2|replace:'ucertify' : 'uCertify'}
    <p>Wraps : </p>
    {$string1|wordwrap:30} <br>
    {$string2|wordwrap:30}
    <p>Merge</p>
    {assign var=merge value="{$string1}{$string2}"}
    {$merge}

   
   <p>Print array in ul list:</p>
   <ul>
   {foreach $our_culture as $culture}
   <li>{print_r($culture)}</li>
   {/foreach}
   </ul>


   <p>HTML selectbox:</p>
   {html_options name=box options=$selectbx selected='2'}


   <p>Number operations on : {$num} </p>
   rem:<br>
   {math equation="$num%2"}<br>
   {if {math equation="$num%2"} eq '0'}
   num is even<br>
   {else}
   num is odd <br>
   {/if}
   table:<br>
   {for $new=1 to 10}
   {math equation="$num*$new"}<br>
    {/for}
   
    </body>
    <script>
        
    </script>

    </html>