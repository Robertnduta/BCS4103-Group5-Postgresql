<?php include('connection.php') ?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="recipe blog" charset="utf-8">
<style>
.row{
  padding: 20px;
}
.column {
  float: left;
  width: 50%;
  overflow: hidden;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

img{
  object-fit: cover;
  width:200px;
  height: 200px;
  border-radius: 50%;
  align-items: center;
  margin: 5px;

}
.pr{
  width:70%;
  border:none;

}
.btn{
  background-color: #158cba;
    color: #fff;
    font-family: Lato,Noto Sans,Noto Sans JP,Noto Sans KR,Noto Sans SC,Noto Sans TC,sans-serif;
    -webkit-font-smoothing: antialiased;
    font-weight: 700;
    letter-spacing: 2px;
    line-height: 1.25rem;
    font-size: .8571428571rem;
    padding: 0.5rem 1rem;
    align-items: center;
    border: 0;
    border-radius: 4px;
  margin: 5px;
  max-width: 70%;
  border-radius: 0.5px;

}
h5{
  text-align: center;
  font-size: 20px;
  font-family: sans-serif;
  font-weight: 400;
  color: black;
  line-height: 0.1px;
  text-transform: uppercase;
}
.area{
  margin: 5px;
  border: 1px solid #e5e5e5;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  -khtml-border-radius: 3px;
  border-radius: 3px;
  box-sizing: border-box;
padding:30px;

}
.edit{
  margin: 5px;
  background-color: #fff;
      border: 1px solid #e5e5e5;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      -ms-border-radius: 3px;
      -o-border-radius: 3px;
      -khtml-border-radius: 3px;
      border-radius: 3px;
      box-sizing: border-box;
      color: #8d8d8d;
      font: 14px Helvetica;
      height: 40px;
      line-height: 17px;
      padding: 0 16px;
      width: 70%;

}
h2{
  text-align: center;
  text-transform: uppercase;
  font-family:sans-serif;

}
</style>
<body>
<?php
$sql='SELECT * fROM public.recipe';
$result=pg_query($sql);
while ($row = pg_fetch_assoc($result)) {
  $img=pg_unescape_bytea($row['image']);
  $string= $row['title'];
  $sti=$row['description'];
  $ing=$row['ingredients'];
 ?>
 <div class="header">
<h2> some other great recipe</h3>
 </div>
 <div class="container">
 <div class=row>
 <div class=column>
  <img src='images/<?php echo $img;?> 'alt='pic' width=100%></img><br>
  <p class='pr'><?php echo $string;?></p>
  <p class='pr'><?php echo $sti;?></p>
  <p class='pr'><?php echo $ing;?></p>
</div>
<div class=column>
  <input type='text' name='tittle' class='edit' placeholder='enter name'><br>
  <textarea type=text name=ing class=area rows=4 cols=50 placeholder=comment></textarea><br>
  <button type=submit name=submitt class=btn>rate this recipe</button>;
</div>
</div>
<?php };?>
</div>
</body>
</html>
