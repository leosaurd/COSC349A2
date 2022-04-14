# COSC349 Assignment 2

Samuel Ng(2955262)  
Matt Mouat(7552560)

The second assignment for COSC349 at University of Otago, Dunedin. 
This assignment utilizes our first assignment listed here: https://github.com/matt53211/cosc349Asgn1  
The assignment listed above is a database platform that saves rudimentary data and allows an individual to retrieve it via an alternative webpage, which showcases interactions between 3 VMs. 

To access our application on the cloud, you may visit using the link: http://ec2-3-88-224-165.compute-1.amazonaws.com/
Or http://ec2-18-209-11-239.compute-1.amazonaws.com/ to acess the database logs.
It will only be available for a limited duration, due to constraints.
If you wish to build this for yourself, you will require an AWS account and knowledge on how to set one up, or take the Cloud Computing course at the University of Otago. We do NOT condone plagiarism, but learning from our code is fine!

Once your set up has been done, altering the vagrantfile is vital to ensuring it will be uploaded to the cloud.  
Ensure that you have run vagrant plugin install aws, as noted from https://github.com/mitchellh/vagrant-aws.  
If you still run into issues, you may benefit from installing https://github.com/bdwyertech/vagrant-aws/releases/tag/v0.8.0-bdwyertech.  
To do that, you will have to download the file, then locate it in your Bash Terminal, before running "vagrant plugin install vagrant-aws-0.8.0.gem".  
You may begin the cloud virtualization via the command "vagrant up --provider=aws".  

Note: Depending on your variables, you may need to alter other files, especially when using a different database type.
Our current Database is an RDS MySQL Database.

# If you wish to set this up and test on your computer locally, follow the instructions below.

To set this up, you require Vagrant from https://www.vagrantup.com/downloads  
To install Vagrant, follow the instructions provided by their website.   

Following the installation of Vagrant, if you wish to test this on your computer, you will require VirtualBox.  
You may obtain the setup file - Oracle VM Manager - from https://www.virtualbox.org/  
After installing Oracle VM Manager, you will require a bash terminal if you do not already have one.  

You may obtain a bash terminal from https://www.atlassian.com/git/tutorials/git-bash or https://git-scm.com/downloads.  
Take note, the bash terminal differs from command line terminals, and are a separate program.  
If you are on windows 10, there is a way to utilize bash, though it is experimental. More details at https://www.laptopmag.com/au/articles/use-bash-shell-windows-10  

After obtaining Vagrant, Oracle VM Manager and a bash terminal, you can now begin setting up to test Vagrant on your computer.  
To set up, you will first need to clone the github using the link: https://github.com/matt53211/Cosc349asgn2.git  
After it has been cloned, start up your bash terminal.  

Navigate to the directory via bash, using the "cd" command to change directories. After entering the directory such that it looks like:  
...\Cosc349asgn2
You will be able to input the command "vagrant up" into the bash terminal to start the process. You will have to replace various files with the ones located at https://github.com/matt53211/cosc349Asgn1, most notably the webpages and the vagrantfile. They have been separated for easier understanding of the differences between the set up for AWS and on your local computer. 


