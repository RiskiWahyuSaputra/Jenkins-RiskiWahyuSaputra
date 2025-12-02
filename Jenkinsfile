pipeline {
    agent any 

    stages {
        stage('Checkout & Install Dependencies') {
            steps {
                echo 'Pulling code and installing dependencies...'
                sh 'composer install' 
            }
        }

        stage('Unit Test (PHPUnit)') {
            steps {
                echo 'Running PHPUnit tests...'
                sh './vendor/bin/phpunit --log-junit results.xml' 
            }
        }

        stage('Execute PHP Code') {
            steps {
                echo 'Executing php index.php...'
                powershell 'php index.php'
            }
        }
    }

    post {
        always {
            junit 'results.xml'
        }
        failure {
            echo 'Pipeline GAGAL.'
        }
    }
}
