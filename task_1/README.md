## Task 1 (Install Ubuntu and Guest Additions)
Link how to install VirtualBox Guest Additions: https://linuxize.com/post/how-to-install-virtualbox-guest-additions-in-ubuntu/ 

### Tutorial
Below are the step-by-step instructions to install VirtualBox guest additions on Ubuntu guests. These steps will work on both Ubuntu Desktop and Server guest installations.

    Open VirtualBox GUI Manager.

    Start the Ubuntu guest virtual machine.

    Login to the Ubuntu guest as a sudo user and install the packages required for building external kernel modules:

    sudo apt update
    sudo apt install build-essential dkms linux-headers-$(uname -r)

$(uname -r) prints the running Kernel version .

From the virtual machine menu, click Devices -> “Insert Guest Additions CD Image” as shown on the image below:
Insert Guest Additions CD Image

If you get an error saying the guest system has no CD-ROM, stop the virtual machine, open the virtual machine settings and from the “Storage” tab, add a new CD-ROM device to the machine by clicking on the plus sign (Adds optical device). Once done, reboot the virtual machine.

Open the Ubuntu guest terminal, create a new directory as the mount point for the CD drive and mount the ISO file:
```
sudo mkdir -p /mnt/cdrom
sudo mount /dev/cdrom /mnt/cdrom
```
Navigate to the directory and run the VBoxLinuxAdditions.run script to install the Guest Additions. The --nox11 option will tell the installer not to spawn an xterm window:
```
cd /mnt/cdrom
sudo sh ./VBoxLinuxAdditions.run --nox11
```
The output will look like below:

Verifying archive integrity... All good.
Uncompressing VirtualBox 5.2.32 Guest Additions for Linux........
...
VirtualBox Guest Additions: Starting.

Reboot the Ubuntu guest for changes to take effect:
```
sudo shutdown -r now
```
Once the virtual machine is booted, log into it and verify that the installation was successful and the kernel module is loaded using the lsmod command:
```
lsmod | grep vboxguest
```
The output will look something like this:
```
vboxguest             303104  2 vboxsf
```
No output means that the VirtualBox kernel module is not loaded.

Now that VirtualBox Guest Additions are installed on the Ubuntu guest machine, you can enable Shared clipboard and Drag’n Drop support from the virtual machine settings “Storage” tab, Enable 3D acceleration from the “Display” tab, create Shared folders and more.