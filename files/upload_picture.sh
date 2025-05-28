#!/bin/bash

function usage() {
    cat <<EOF
Usage: upload_pictures.sh --url="http://piwigo.my-website.ch/ws.php" --username="user" --password="pass" --image_path="path_to_image" --album_id=<album_id>
    
    -h      --help        Display help.
    -u      --url         URL to piwigo API (ends with ws.php)
            --username    Username to authenticate with piwigo server
            --password    Password to authenticate with piwigo server
    -i      --image_path  Path to image to upload (only jpg or png format)
    -a      --album_id    ID of album to upload image to
EOF
}

options=$(getopt -l "help,url::,username::,password::,image_path::,album_id::" -o "hu::i::a::" -- "$@")
eval set -- "${options}"

while true; do
    case $1 in
    -h | --help)
        usage
        exit 0
        ;;
    -u | --url)
        shift
        URL=$1
        ;;
    --username)
        shift
        USERNAME=$1
        ;;
    --password)
        shift
        PASSWORD=$1
        ;;
    --image_path)
        shift
        IMAGE_PATH=$1
        ;;
    --album_id)
        shift
        ALBUM_ID=$1
        ;;
    --)
        shift
        break
        ;;
    esac
    shift
done

echo "Uploading ${IMAGE_PATH} to ${URL}..."

cookie_file=$(mktemp)

status_code=$(curl -o /dev/null -s -w "%{http_code}" -c "${cookie_file}" -X POST -F 'method=pwg.session.login' -F "username=${USERNAME}" -F "password=${PASSWORD}" "${URL}")
if [[ ${status_code} -lt 200 || ${status_code} -gt 299 ]]; then
    echo "ERROR: Failed to authentication with piwigo server ${URL} (username: ${USERNAME}) - status code: ${status_code}"
    exit 1
fi

status_code=$(curl -o /dev/null -s -w "%{http_code}" -b "${cookie_file}" -c "${cookie_file}" -X POST -F 'method=pwg.images.addSimple' -F "image=@${IMAGE_PATH}" -F "category=${ALBUM_ID}" "${URL}")
if [[ ${status_code} -lt 200 || ${status_code} -gt 299 ]]; then
    echo "ERROR: Failed to upload image to piwigo server ${URL} (username: ${USERNAME}) - status code: ${status_code}"
    exit 1
fi

status_code=$(curl -o /dev/null -s -w "%{http_code}" -b ${cookie_file} -c ${cookie_file} -X POST -F 'method=pwg.images.emptyLounge' "${URL}")
if [[ ${status_code} -lt 200 || ${status_code} -gt 299 ]]; then
    echo "ERROR: Failed to emptyLoung on piwigo server ${URL} (username: ${USERNAME}) - status code: ${status_code}"
    exit 1
fi

echo "Done!"
