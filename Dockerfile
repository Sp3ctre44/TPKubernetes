FROM php:7.2-cli
COPY . /xampp/htdocs/VotingOnline
WORKDIR /xampp/htdocs/VotingOnline
CMD [ "php", "./index.php" ]
