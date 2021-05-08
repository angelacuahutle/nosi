
task :server do
  system "php -c php.ini -S localhost:8000"
end

desc "Deploy to staging server"
task :stage do
  system "rsync --exclude=.git -avzP --delete-after ./ myringproject@mrp.reaktivo.com:mrp.reaktivo.com"
end


desc "Deploy to production server"
task :deploy do
  system "rsync --exclude=.git -avzP --delete-after ./ myringproject@myringproject.com:myringproject.com"
end

