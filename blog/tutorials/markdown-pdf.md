Markdown PDF converter
2016-05-30
Markdown is a brilliant format for storing formatted files in plain text. This tutorial shows you how to generate a formatted presentable PDF file from such files in linux
# Markdown to PDF converter

---

Markdown is a great tool for formatting large bits of data in plain text, and it can with the right formatting look professional and presentable. On top of this, you do not need to worry about formatting in programs such as Microsoft Word which generate `.docx` files which is difficult to accurately replicate. Storing all your data in markdown means it's 

- In **plain text**, so it can be moved onto any machine or any operating system
- Formatted **as you want**. Markdown can be formatted according to your own CSS file, and so it can look exactly how you want it

During my time at university, I found that I would be switching between Windows and Linux machines a lot and making documents for submission was always a pain, so I wanted a method of getting these files in a professional and presentable format on any devices. The solution to this as i've found is writing information in Markdown, and automatically converting it to Github.

The actual process I go through is convoluted, but it works for me, and I will only be sharing a small portion of this. What I do is commit a markdown file to Github, which launches Travis (on a private repo, which requires a paid plan or a [student pack](https://education.github.com/pack)). Travis will build my file and update my personal web server (not [jordanfisher.me](http://jordanfisher.me)), which is SSL secured. I navigate to my website, find the file and download the PDF all formatted and lovely. This, like my website, means I can update documents and access them in a formatted manner in as little as a minute. What I will be sharing today is the process I go through of converting Markdown to PDF

## Setup (Quick way)

If you know what you're doing in the world of linux, you can simply copy this into your terminal and let it run. This should download and install everything you need it too

```bash
sudo apt-get install -y pandoc texlive-latex-base openssl build-essential xorg libssl-dev && \
cd /tmp && \
mkdir ~/.pdf && \
cd ~/.pdf/ && \
wget http://jordanfisher.me/bin/wkhtmltopdf && \
wget http://jordanfisher.me/bin/footer.html && \
wget http://jordanfisher.me/bin/markdown.css && \
wget http://jordanfisher.me/bin/conmd && \
sudo mv wkhtmltopdf /usr/bin/wkhtmltopdf && \
echo ". ~/.pdf/conmd" >> ~/.bashrc && \
```

Now, given a markdown file `markdown-file.md`, you can simply run

```bash
$ ls
markdown-file.md
$ conmd markdown-file
#Converting file ...
#...
#Finished converting file
$ ls
markdown-file.md    markdown-file.pdf
```

Read below for an explanation of what happens

## Setup (Long way + Explanation) 

--- 

To go from Markdown to PDF, I do the following 

- Convert Markdown to HTML (with a custom CSS file) 
    - For this, I use [pandoc](http://pandoc.org/), which is generally accepted to be the best converter between formats. I'm not however going straight from Markdown to PDF in Pandoc, because it uses a slightly different conversion method, which I found to be less presentable or tweakable
- Convert the HTML to a PDF (with an external footer and header)
    - For this, I use [wkhtmltopdf](http://wkhtmltopdf.org/), which cleanly converts the between HTML to PDF

## Installation

---

This installation guide is for an debian based distribution (such as Ubuntu Server). This was actually done in practice on Ubuntu Server 14.04

#### Step 1: Install dependencies

Install the following programs. You shouldn't need to add any repositories for these packages

```
sudo apt-get install -y pandoc texlive-latex-base openssl build-essential xorg libssl-dev
```

#### Step 2: Download **wkhtmltopdf**

You can download it [here](/bin/wkhtmltopdf). Once you have downloaded it, you need to place it in a directory where it can be executed from a home directory. Navigate to where you have downloaded the file and copy it into the `/usr/bin` directory (for debian based distros specifically)

```
cd ~/Downloads
sudo cp wkhtmltopdf /usr/bin/wkhtmltopdf
```

You should now be able to use wkhtmltopdf from the command line. Try `wkhtmltopdf --help` to check for the help page of *wkhtmltopdf*

#### Step 3: Setup the resource files

You should make a hidden folder somewhere on your drive to hide your processing files in. I chose for my implementation `~/.pdf` in order to store everything. Change accordingly if not for you, but if you wish to keep this, follow these steps

```bash
mkdir ~/.pdf
cd ~/.pdf
```

You want to create a `markdown.css` file (to store the specific formatting for your file), and a `header.html` or `footer.html` for some extra information added to the command. I'm using a very github-esque format for file output with a footer, which includes my name and a page number. If you want a similar format to this, copy the markdown file and footer file below, saving them in the `~/.pdf` directory

**[markdown.css](/bin/markdown.css)**

**[footer.html](/bin/footer.html)**

#### Step 4: Cleaning up the commands

With the input of the file name, this is how the conversion happens (where `$1` is the first input argument)

```
pandoc -c ~/.pdf/markdown.css -V fontsize=12pt $1.md -o $1.html
wkhtmltopdf --footer-html ~/.pdf/footer.html $1.html $1.pdf
rm -r $1.html
```

I found it easier to add this as an aliad to the terminal, under the prefix `conmd`. So, given a file `test.md`, I can call `conmd test` and the file `test.pdf` will be outputted

You can define this inside your `~/.bashrc` file 

```
function conmd {
    echo Converting....
    pandoc -c ~/.pdf/newmarkdown.css -V fontsize=12pt $1.md -o $1.html
    wkhtmltopdf --footer-html ~/.pdf/footer.html $1.html $1.pdf
    rm -r $1.html
    echo Finished
}
```

## Finished

---

There are obviously limits to this, but it works very well for the average kind of document. With my specific configurations, you can call the following commands within markdown and it will be propagated to the pdf file appropiately

```
<div class="break"> </div>  Sends a new page
<sup>2</sup>                Superscript
<sub>2</sub>                Subscript
```

And that is how the conversion works. You can now, whilst making any markdown file, call `conmd -filename-` and output will be a formatted PDF file looking professional and cross-platform accessible. If you're writing an essay or doing any sort of code formatting inside a document, this acts as a nice medium between LaTeX and Microsoft Word

---

Thanks for reading

*~ jordan*


