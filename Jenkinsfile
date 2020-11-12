env.DOCKER_REGISTRY = '25092018'
env.DOCKER_IMAGE_NAME = 'stgWordPress'
pipeline {
    agent any
    stages {
        stage ('Start') {    
            steps {
               sh "docker build --build-arg APP_NAME=$DOCKER_IMAGE_NAME -t $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER ."
            }
        }
        stage ('Docker Push') {
            steps {                
                sh "docker push $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER"
            }
        }
        stage ('Pulling') {
            steps {
                sh('sed -i "s/@/$BUILD_NUMBER/g" staging-wordpress.yml')
                sh('kubectl apply -f staging-wordpress.yml')
            }
        }
        stage ('Remove Image') {
            steps {
                sh "docker rmi $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER"
            }
        }
        stage('Ingress') {
            steps {
                sh "kubectl get ingress -n staging"
            }
        }
    }
}