<html>

    create data form

    <form method="post" action="store">
        @csrf
        name:
        <input type="text" name="name">
        price:
        <input type="number" name="price">
        category:
        <select name="category">
            <?php
            foreach($categories as $category)
            {
            echo'
            <option value="'.$category->id.'">'.$category->name.'</option>
            ';
            }       
            ?>
           </select>
        owner:
           <select name="owner">
            <?php
            foreach($owners as $owner)
            {
            echo'
            <option value="'.$owner->id.'">'.$owner->brand.'</option>
            ';
            }       
            ?>
           </select>
           <input type="submit" value="create">
    </form>
</html>