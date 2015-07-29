// script.js

$(document).ready(function() {
	// jQuery adding html to the studentsTable
	$('#studentsTable tbody').not(':first').not(':last').remove();
	var html = '';
	for(var i = 0; i < students.length; i++) {
        html += '<tr><td>'+ students[i].id + '</td><td>' + students[i].user_name + '</td><td>' + students[i].password + '</td></tr>';
    }
	$('#studentsTable tbody').first().html(html);

	// Raondom Button click function
	$('#random').on('click', function(e) {
		// array's for random data
		var names = [ "Mike","John","Andrew","Kyle","Tiger","Michael","Rory","Kirk","Robert","DeSean","Calvin","Tom","Colt","Jay","Chris","Peirre","Sean","Simon","Matt","Jake", "Aliza", "Latesha", "Marcia", "Marlana", "Verlene", "Pearline", "Loan", "Iola", "Ruby", "Rikki", "Garrett", "Thea", "Tameka", "Doretha", "Earlie", "Brock", "Odessa", "Wade", "Ferdinand", "Lissa", "Chin", "Rosamond", "Rafaela", "Timothy", "Marissa", "Elke", "Yelena", "Abbie", "Ivonne", "Jack", "Karey", "Mitch", "Sacha", "Malika", "Rachele", "Manuel", "Christy", "Suanne", "Ashley", "Penelope", "Lisabeth", "Pamella", "Ashanti", "Caterina", "Cristie", "Stephaine", "Beula", "Candance", "Tyrell", "Craig"];
		var passwords = ["password", "classified", "unknown ", "special", "hungry", "chicken", "steak", "shrimp", "lobster", "crab", "sushi", "random", "unique ", "monday ", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday", "crowfoot", "euphrasy", "cruciate", "myriopod", "monorail", "eleanora", "splendor", "gricault", "freakier", "margrave", "soufflot", "strobila", "holistic", "decliner", "priapism", "anginous", "nittiest", "frizette", "peisenor", "dismally", "monolatry", "hollyhock", "shiftiest", "isomerous", "geraldine", "hyolithid", "metricise", "venatical", "stockfish", "councilor", "sincerity", "platinoid", "gantrisin", "spiderman", "landaulet", "quinidine", "depictive", "pricklier", "knobstick", "circinate"];

		// loop through students and replace with random data
		for(var i =0; i < students.length; i++) {
			var newName = names[Math.floor(Math.random()*names.length)];
			var newPassword = passwords[Math.floor(Math.random()*passwords.length)];
			students[i].user_name = newName;
			students[i].password = newPassword;
		}
			// jQuery adding html to the studentsTable
			$('#studentsTable tbody').not(':first').not(':last').remove();
			var html = '';
			for(var j = 0; j < students.length; j++) {
	            html += '<tr><td>'+ students[j].id + '</td><td>' + students[j].user_name + '</td><td>' + students[j].password + '</td></tr>';
	        }
			$('#studentsTable tbody').first().html(html);
			console.log("random values", students);

					// Ajax update the DB
			        e.preventDefault();
			        $.ajax({
			            url: "/welcome/update",
			            type: 'POST',
			            data: {data:students},
			            success: function (data) {
			                console.log('Ajax success');
			            	console.log("data",data);
				            },
			            error: function () {
			                console.log('Ajax failed');
			            }
			        });

	});

});