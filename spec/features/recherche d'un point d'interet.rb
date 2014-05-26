equire 'spec_helper'

feature 'recherche un point d'un point d'interet' do

  background do
        visit '/'
        click_on 'Ajouter un point'
        select "Parc", :from => 'Type'
        fill_in "Nom",:with => 'Parc Luxembourg'
        fill_in "Prix",:with => '0'
        fill_in "Date ouverte" => 'lundi à dimanche'
        attach_file(photo,sample_photo.png)
        fill_in "video_input_1",:with => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
        click_on "Enregistrer"
   end

  scenario 'Recherche par nom' do
        visit '/'
        click_on 'Avancée'
        fill_in 'Nom', :with => 'luxembourg'
        click_on 'Rechercher'
        page.should_not have_content 'luxembourge'
  end

  scenario 'Recherche par type' do
        visit '/'
        click_on 'Avancée'
        select "Parc", :from => 'Type'
        click_on 'Rechercher'
        page.should_not have_content 'luxembourge'
  end

  scenario 'Recherche par Date visite' do
        visit '/'
        click_on 'Avancée'
        select "26/05/2014", :from => 'date'
        click_on 'Rechercher'
        page.should_not have_content 'luxembourge'
  end

  scenario 'Recherche par prix' do
        visit '/'
        click_on 'Avancée'
        select "0", :from => 'prix'
        click_on 'Rechercher'
        page.should_not have_content 'luxembourge'
  end

  scenario 'Recherche par photo et video' do
        visit '/'
        click_on 'Avancée'
        check 'Avec photo'
        check 'Avec video'
        click_on 'Rechercher'
        page.should_not have_content 'luxembourge'
  end

  scenario 'Recherche par tous' do
        visit '/'
        click_on 'Avancée'
        fill_in 'Nom', :with => 'luxembourg'
        select "Parc", :from => 'Type'
        select "26/05/2014", :from => 'date'
        select "0", :from => 'prix'
        check 'Avec photo'
        check 'Avec video'
        click_on 'Rechercher'
        page.should_not have_content 'luxembourge'
  end
