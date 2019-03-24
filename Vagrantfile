# -*- mode: ruby -*-
# vi: set ft=ruby :


Vagrant.configure("2") do |config|
  
  config.vm.box = "ubuntu/xenial64"
  config.vm.network :private_network, ip: "175.30.30.174"
  config.vm.hostname = "taskseuler.loc"
  config.hostsupdater.aliases = []
  config.vm.provision "shell", path: "provision/install.sh"

end