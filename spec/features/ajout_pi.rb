eature "Add_pi" do
  
  
  # Cas d'ajout d'un point d'interet qui abouti
  scenario "with_no_error" do
   
    click_on "type"
    fill_in_and_select 'Musée', :from => 'meseum_select'
   
   
    click_on "nom"
    fill_in "name_input",:with => 'Musée du Louvre'
    
    click_on "prix"
    fill_in "price_input",:with => '6,42'
    
    
    click_on "date_picker" #correspond au calendrier js
    #Continuer le test du calendrier manuellement 
      
    click_on "position"   
    #Continuer le test de localisation du point d'interet manuellement  
      
    click_on "photo"  
    #Continuer le test d'ajout de photo manuellement 
            
    click_on "video"
    fill_in "video_input_1",:with => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
    
    click_on "description"
    fill_in "description_input",:with => 'Le musée du Louvre est un musée d\'art et d\'antiquités installé au cœur de Paris dans le palais du Louvre. C\'est l\'un des plus grands musées du monde, et le plus grand de Paris, par sa surface d\'exposition de 60 600 m24, et ses collections qui comprennent environ 460 000 œuvres.'    
    
    # Test la notation en étoile en cliquant sur la quatrieme étoile (4/5) 
    click_on "note_4"    
    
    click_on "Enregistrer"
    
    page.should have_content 'Point d\'interet ajouté avec succès''
    
  end
end    
