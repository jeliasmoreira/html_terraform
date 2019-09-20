while IFS= read -r line; do 
    sed -i "s/localhost/$line/g" /tmp/conn.php
done < "$1"
