<?php
if(!isset($layout_context)){
    $layout_context = "public";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylesheets/public.css">
    <title>Widget Corp <?php if($layout_context == 'admin'){ echo "Admin"; } ?></title>
</head>
<body>
    <div id="header">
        <h2 class="fw-bolder">Widget Corp <?php if($layout_context == 'admin'){ echo "Admin"; } ?></h2>
    </div>