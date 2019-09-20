while IFS= read -r line; do 
    sed -i "s/localhost/$line/g" sudo sh sed.sh /tmp/hosts/conn.php
done < "$1"
