while IFS= read -r line; do 
    sed -i "s/localhost/$line/g" ./conn.php
    sed -i "s/localhost/$line/g" ./index.html
    sed -i "s/localhost/$line/g" ./index.php
done < "$1"
