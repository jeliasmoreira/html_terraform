while IFS= read -r line; do 
    sed -i "s/localhost/$line/g" /tmp/html_terraform/conn.php
    sed -i "s/localhost/$line/g" /tmp/html_terraform/index.html    
done < "$1"
