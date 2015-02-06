
## Setup 
When you have a LAMP stack ready:

1. Clone the repository
2. Install all the project dependencies with composer: doctrine, tonic, doctrine migrations...
  
  ```sh
  $ php composer.phar install 
  ```
3. Create the database from your **mysql** terminal or any db visual tool like Workbench.

  ```sql
  mysql> create database tonic_service;
  ```

4. Go to the **db** folder and run the migrations: 
  ```
  $ cd db
  $ php migrations.php migrations:migrate
  ```
5. 
**Unfinished**...


## The MIT License (MIT)
Copyright (c) 2015 Juan Lizarazo

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

