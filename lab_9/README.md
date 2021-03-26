# How to set up the enrollement MySQL database

## Clone this repository

In order to successfully clone this repository, you will need to have git installed on your computer. If git is currently not installed on your computer, download the installer here: https://git-scm.com/downloads. Make sure you download the git version that matches your operating system!

Once you have git installed, open your computers terminal and clone the repository use the following command:

```bash
git clone https://github.com/NucciTheBoss/ist_256_code.git
```

I recommend cloning the repository to the `Ampps/www/` (for Mac) or `Ampps\www\` (for Windows) directory, or to the `/var/www/html` directory if you are just using Apache! Once you have successfully cloned this repository, make sure that you start MySQL on your computer.

## Executing course.sql by reading from standard input

In order to set up the enrollment database, you only need to use one command!

### For Mac:

To set up the enrollment database on Mac, simply execute the following command in your terminal (interpreter should either be `zsh` or `bash`):

```bash
$ ./mysql -u root < /path/to/ist_256_code/lab_9/data/course.sql
```

Now you are good to go!

### For Windows:

To set up the enrollment database on Windows, simply execute the following command in `cmd.exe`:

```
C:\>.\mysql -u root < \path\to\ist_256_code\lab_9\data\course.sql
```

Now you are ready to start messing around with PHP and HTML!
