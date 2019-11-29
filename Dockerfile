FROM php:7.2-cli
COPY . https://github.com/Sp3ctre44/TPKubernetes/tree/master/TP
WORKDIR https://github.com/Sp3ctre44/TPKubernetes/tree/master/TP
CMD [ "php", "./TP/index.php" ]
