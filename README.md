# X1-Splash-Page
I was assigned to rebuild this website from scratch, originally in WordPress, using HTML, CSS, JS, PHP. After many failed attempts on domain forwarding from AWS hosted web server
to a Wordpress hosted platform, the website has been rebuilt from scratch to meet project deadline. The client was very happy that it is no longer crashing and using all memory/CPU on the server.

#### I have dockerized the php website with Apache and exposed port 80. Afterwards, I uploaded the image to Azure Container Registry and then used Container Instance to deploy the image. 



### Create yaml file for Deployment controller and load balancer service in AKS:

## Live demo deploying with AKS using yaml files:
### http://x1website.eastus.cloudapp.azure.com/
### http://52.188.178.140/

note: These yaml files have been run on minikube and works consistently before deploy to AKS.

![x1_dns](https://user-images.githubusercontent.com/5561950/125287649-2e7bf680-e2eb-11eb-84b8-628b1871c1b5.PNG)


<br><br>


## Live demo deploying a container directly from ACR:
### x1website.eastus.azurecontainer.io

![x1_aci](https://user-images.githubusercontent.com/5561950/124399804-fb82a300-dceb-11eb-81e6-d2b5ea3d6622.PNG)


<br><br>
### Technologies used:
- HTML
- CSS
- JavaSscript
- PHP
- Bootstrap v5.0
- AOS animation
- JQuery
- Docker
- AKS
- ACR
- ACI
