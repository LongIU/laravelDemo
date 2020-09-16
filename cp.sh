if [[ ${1} == copy ]];then
    scp -r op-admin@172.16.208.${2}:/home/op-admin/LaravelLongDemo/* .
elif [[ ${1} != "" ]];then
    scp -r  cp.sh .env.testing .env app public resources routes tests op-admin@172.16.208.${1}:/home/op-admin/LaravelLongDemo/
fi
