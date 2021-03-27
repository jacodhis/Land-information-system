  if ($request->hasFile('cover_image')) {
            $filenamewithext = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $ext;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenametostore);
        } else {
            $filenametostore = 'noimage.jpg';
        }

         $post = new design;
         $post->image = $filenametostore;      
         $post->save();






@endsection