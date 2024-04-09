@extends('layouts.app')
@section('content')
   

<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="page-titles">
				<ol class="breadcrumb">
					<li>
						<h5 class="bc-title" style="color: rgba(3, 3, 18, 0.581); weith:80px"><b>Tableau de bord</b></h5>
					</li>
				</ol>
				<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#" role="button"
					aria-controls="offcanvasExample1"><b>+ Ajouter les taches</b>
				</a>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9 wid-100">
						<div class="row">
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card bg-primary-light">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<a href="{{ route('fournisseur.index')}}">
													<h6 style="color: blue; weith:60px"><b>ARTISTES</b></h6>
													<h3><b>{{ $nombresFour }}</b></h3>
												</a>
											</div>
											<div class="icon-box ">
												<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd"
														d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z"
														stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
													<path fill-rule="evenodd" clip-rule="evenodd"
														d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z"
														stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
													<path
														d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997"
														stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
													<path
														d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936"
														stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
												</svg>
											</div>
										</div>
										{{-- <div id="NewCustomers"></div> --}}
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<a href="#">
													<h6 style="color: rgb(38, 0, 255); weith:60px"><b>CHANTS</b></h6>
													<h3 style="color: blue; weith:60px"><b>{{ $nombresVil }}</b></h3>
												</a>
											</div>
											<div class="icon-box">
												<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
													<!-- Building shape -->
													<rect x="4" y="6" width="14" height="9" fill="#888888" stroke="#888888" stroke-width="2"/>
													<rect x="3" y="5" width="16" height="1" fill="#888888" stroke="#888888" stroke-width="2"/>
													<rect x="3" y="15" width="16" height="1" fill="#888888" stroke="#888888" stroke-width="2"/>
													<rect x="5" y="2" width="12" height="4" fill="#888888" stroke="#888888" stroke-width="2"/>
													
													<!-- Library symbol (book) -->
													<rect x="6" y="12" width="10" height="1" fill="#888888" stroke="#888888" stroke-width="2"/>
													<rect x="6" y="13" width="10" height="1" fill="#888888" stroke="#888888" stroke-width="2"/>
													<rect x="6" y="14" width="10" height="1" fill="#888888" stroke="#888888" stroke-width="2"/>
													<rect x="6" y="15" width="10" height="1" fill="#888888" stroke="#888888" stroke-width="2"/>
												</svg>
																																		
											</div>
										</div>
										{{-- <div id="NewCustomers"></div> --}}
									</div>
								</div>
							</div>
							
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card bg-primary-light">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<a href="#">
													<h6 style="color: rgba(20, 15, 18, 0.7); weith:60px"><b>Utilisateurs</b></h6>
													<h3 style="color: rgba(28, 9, 19, 0.337); weith:60px"><b>{{ $nombresUser }}</b></h3>
												</a>
											</div>
											<div class="icon-box">
												<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd"
														d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z"
														stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
													<path fill-rule="evenodd" clip-rule="evenodd"
														d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z"
														stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
													<path
														d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997"
														stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
													<path
														d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936"
														stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
												</svg>
											</div>
										</div>
										{{-- <div id="NewCustomers"></div> --}}
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 same-card">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card">
										<div class="depostit-card-media d-flex justify-content-between style-1">
											<div>
												<a href="#">
													<h6 style="color: rgb(123, 0, 255); weith:60px"><b>STUDIOS</b></h6>
													<h3 style="color: rgb(43, 0, 255); weith:60px"><b>7</b></h3>
												</a>
											</div>
											<div class="icon-box">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M16.3787 1.875H15.625V1.25C15.625 1.08424 15.5592 0.925268 15.4419 0.808058C15.3247 0.690848 15.1658 0.625 15 0.625C14.8342 0.625 14.6753 0.690848 14.5581 0.808058C14.4408 0.925268 14.375 1.08424 14.375 1.25V1.875H10.625V1.25C10.625 1.08424 10.5592 0.925268 10.4419 0.808058C10.3247 0.690848 10.1658 0.625 10 0.625C9.83424 0.625 9.67527 0.690848 9.55806 0.808058C9.44085 0.925268 9.375 1.08424 9.375 1.25V1.875H5.625V1.25C5.625 1.08424 5.55915 0.925268 5.44194 0.808058C5.32473 0.690848 5.16576 0.625 5 0.625C4.83424 0.625 4.67527 0.690848 4.55806 0.808058C4.44085 0.925268 4.375 1.08424 4.375 1.25V1.875H3.62125C2.99266 1.87599 2.3901 2.12614 1.94562 2.57062C1.50114 3.0151 1.25099 3.61766 1.25 4.24625V17.0037C1.25099 17.6323 1.50114 18.2349 1.94562 18.6794C2.3901 19.1239 2.99266 19.374 3.62125 19.375H16.3787C17.0073 19.374 17.6099 19.1239 18.0544 18.6794C18.4989 18.2349 18.749 17.6323 18.75 17.0037V4.24625C18.749 3.61766 18.4989 3.0151 18.0544 2.57062C17.6099 2.12614 17.0073 1.87599 16.3787 1.875ZM17.5 17.0037C17.499 17.3008 17.3806 17.5854 17.1705 17.7955C16.9604 18.0056 16.6758 18.124 16.3787 18.125H3.62125C3.32418 18.124 3.03956 18.0056 2.8295 17.7955C2.61944 17.5854 2.50099 17.3008 2.5 17.0037V4.24625C2.50099 3.94918 2.61944 3.66456 2.8295 3.4545C3.03956 3.24444 3.32418 3.12599 3.62125 3.125H4.375V3.75C4.375 3.91576 4.44085 4.07473 4.55806 4.19194C4.67527 4.30915 4.83424 4.375 5 4.375C5.16576 4.375 5.32473 4.30915 5.44194 4.19194C5.55915 4.07473 5.625 3.91576 5.625 3.75V3.125H9.375V3.75C9.375 3.91576 9.44085 4.07473 9.55806 4.19194C9.67527 4.30915 9.83424 4.375 10 4.375C10.1658 4.375 10.3247 4.30915 10.4419 4.19194C10.5592 4.07473 10.625 3.91576 10.625 3.75V3.125H14.375V3.75C14.375 3.91576 14.4408 4.07473 14.5581 4.19194C14.6753 4.30915 14.8342 4.375 15 4.375C15.1658 4.375 15.3247 4.30915 15.4419 4.19194C15.5592 4.07473 15.625 3.91576 15.625 3.75V3.125H16.3787C16.6758 3.12599 16.9604 3.24444 17.1705 3.4545C17.3806 3.66456 17.499 3.94918 17.5 4.24625V17.0037Z"
														fill="var(--primary)" />
													<path
														d="M7.68311 7.05812L6.24999 8.49125L5.44186 7.68312C5.38421 7.62343 5.31524 7.57581 5.23899 7.54306C5.16274 7.5103 5.08073 7.49306 4.99774 7.49234C4.91475 7.49162 4.83245 7.50743 4.75564 7.53886C4.67883 7.57028 4.60905 7.61669 4.55037 7.67537C4.49168 7.73406 4.44528 7.80384 4.41385 7.88065C4.38243 7.95746 4.36661 8.03976 4.36733 8.12275C4.36805 8.20573 4.3853 8.28775 4.41805 8.364C4.45081 8.44025 4.49842 8.50922 4.55811 8.56687L5.80811 9.81687C5.92532 9.93404 6.08426 9.99986 6.24999 9.99986C6.41572 9.99986 6.57466 9.93404 6.69186 9.81687L8.56686 7.94187C8.68071 7.82399 8.74371 7.66612 8.74229 7.50224C8.74086 7.33837 8.67513 7.18161 8.55925 7.06573C8.44337 6.94985 8.28661 6.88412 8.12274 6.8827C7.95887 6.88127 7.80099 6.94427 7.68311 7.05812Z"
														fill="var(--primary)" />
													<path
														d="M15 8.125H10.625C10.4592 8.125 10.3003 8.19085 10.1831 8.30806C10.0658 8.42527 10 8.58424 10 8.75C10 8.91576 10.0658 9.07473 10.1831 9.19194C10.3003 9.30915 10.4592 9.375 10.625 9.375H15C15.1658 9.375 15.3247 9.30915 15.4419 9.19194C15.5592 9.07473 15.625 8.91576 15.625 8.75C15.625 8.58424 15.5592 8.42527 15.4419 8.30806C15.3247 8.19085 15.1658 8.125 15 8.125Z"
														fill="var(--primary)" />
													<path
														d="M7.68311 12.6831L6.24999 14.1162L5.44186 13.3081C5.38421 13.2484 5.31524 13.2008 5.23899 13.1681C5.16274 13.1353 5.08073 13.1181 4.99774 13.1173C4.91475 13.1166 4.83245 13.1324 4.75564 13.1639C4.67883 13.1953 4.60905 13.2417 4.55037 13.3004C4.49168 13.3591 4.44528 13.4288 4.41385 13.5056C4.38243 13.5825 4.36661 13.6648 4.36733 13.7477C4.36805 13.8307 4.3853 13.9127 4.41805 13.989C4.45081 14.0653 4.49842 14.1342 4.55811 14.1919L5.80811 15.4419C5.92532 15.559 6.08426 15.6249 6.24999 15.6249C6.41572 15.6249 6.57466 15.559 6.69186 15.4419L8.56686 13.5669C8.68071 13.449 8.74371 13.2911 8.74229 13.1272C8.74086 12.9634 8.67513 12.8066 8.55925 12.6907C8.44337 12.5749 8.28661 12.5091 8.12274 12.5077C7.95887 12.5063 7.80099 12.5693 7.68311 12.6831Z"
														fill="var(--primary)" />
													<path
														d="M15 13.75H10.625C10.4592 13.75 10.3003 13.8158 10.1831 13.9331C10.0658 14.0503 10 14.2092 10 14.375C10 14.5408 10.0658 14.6997 10.1831 14.8169C10.3003 14.9342 10.4592 15 10.625 15H15C15.1658 15 15.3247 14.9342 15.4419 14.8169C15.5592 14.6997 15.625 14.5408 15.625 14.375C15.625 14.2092 15.5592 14.0503 15.4419 13.9331C15.3247 13.8158 15.1658 13.75 15 13.75Z"
														fill="var(--primary)" />
												</svg>

											</div>
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					{{-- ****************************************************************************** --}}
					{{-- ******************************************************************************** --}}
					{{-- *****Affichage fournisseur qui ont au moins une note*************************** --}}
					<div class="col-xl active-p">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects shorting">
									<div class="tbl-caption">
										<h4 class="heading mb-0" style="color: rgb(51, 0, 255); weith:60px"><b>LES ARTISTES EVALUES</b></h4>
									</div>
									<table id="projects-tbl" class="table ItemsCheckboxSec">
										<thead>
											<tr>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Nom Artiste</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Chant</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Progression Chant</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Téléphone</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Statut</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Ville</b></th>
											</tr>
										</thead>
										<tbody>
											<!-- Dans votre_vue.blade.php -->
											@foreach ($fournisseurs as $fournisseur)
												@if ($fournisseur->notes->isNotEmpty())
													<tr>
														<td class="bg-success" style="color: rgb(243, 243, 245); weith:30px">{{ $fournisseur->nom }} {{ $fournisseur->prenom }} </td>
														<td>
															@foreach ($fournisseur->notes as $note)
																<div class="d-flex align-items-center">
																	<p style="color: rgb(3, 3, 108); weith:30px" class="mb-0 ms-2">En innovation</p>
																</div>
															@endforeach
														</td>
														<td class="pe-0">
															@foreach ($fournisseur->notes as $note)
																@php
																	$valeur = $note->valeur;
																	$pourcentage = 0;
																	if ($valeur === 5) {
																		$pourcentage = 100;
																	} elseif ($valeur === 4) {
																		$pourcentage = 80;
																	} elseif ($valeur === 3) {
																		$pourcentage = 60;
																	} elseif ($valeur === 2) {
																		$pourcentage = 30;
																	} elseif ($valeur === 1) {
																		$pourcentage = 10;
																	}
																@endphp
																<div class="tbl-progress-box">
																	<div class="progress">
																		<div class="progress-bar bg-primary"
																			style="width:{{ $pourcentage }}%; height:5px; border-radius:4px;"
																			role="progressbar"></div>
																	</div>
																	<span style="color: rgb(3, 3, 108); weith:30px">{{ $pourcentage }}%</span>
																</div>
															@endforeach
														</td>
														<td>
															<div class="d-flex align-items-center">
																<p class="mb-0 ms-2" style="color: rgb(3, 3, 108); weith:30px">{{ $fournisseur->telephone }}</p>
															</div>
														</td>
														<td class="pe-0">
															<span class="badge badge-primary light border-0">{{ $fournisseur->statut }}</span>
														</td>
														<td>
															<span style="color: rgb(3, 3, 108); weith:30px">Libreville</span>
														</td>
													</tr>
												@endif
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					
					{{-- ******************************************************************************** --}}
					{{-- ****************Affichage des fournisseurs non evalués   ********************** --}} 
					{{-- ******************************************************************************** --}}
					<div class="col-xl active-p">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects shorting">
									<div class="tbl-caption">
										<h4 class="heading mb-0" style="color: rgb(255, 153, 0); weith:60px"><b>LES ARTISTES NON EVALUES</b></h4>
									</div>
									<table id="projects-tbl" class="table ItemsCheckboxSec">
										<thead>
											<tr>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Nom Fournisseur</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Chant</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Progression Chant</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Téléphone</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Statut</b></th>
											</tr>
										</thead>
										<tbody>
											<!-- Dans votre_vue.blade.php -->
											@foreach ($fournisseurs as $fournisseur)
												@if ($fournisseur->notes->isEmpty())
													<tr 
													{{-- onclick="window.location='{{ route('evaluation', $fournisseur->id) }}';" --}}
														>
														<td  style="cursor: pointer; background-color: rgb(148, 148, 5); color: rgb(244, 244, 248); weith:30px" class="bg-warning">{{ $fournisseur->nom }} {{ $fournisseur->prenom }} </td>
														<td>
															@foreach ($fournisseur->notes as $note)
																<div class="d-flex align-items-center">
																	<p style="color: rgb(3, 3, 108); weith:30px" class="mb-0 ms-2">{{ $note->valeur }}</p>
																</div>
															@endforeach
														</td>
														<td class="pe-0">
															@foreach ($fournisseur->notes as $note)
																@php
																	$valeur = $note->valeur;
																	$pourcentage = 0;
																	if ($valeur === 5) {
																		$pourcentage = 100;
																	} elseif ($valeur === 4) {
																		$pourcentage = 80;
																	} elseif ($valeur === 3) {
																		$pourcentage = 60;
																	} elseif ($valeur === 2) {
																		$pourcentage = 30;
																	} elseif ($valeur === 1) {
																		$pourcentage = 10;
																	}
																@endphp
																<div class="tbl-progress-box">
																	<div class="progress">
																		<div class="progress-bar bg-primary"
																			style="width:{{ $pourcentage }}%; height:5px; border-radius:4px;"
																			role="progressbar"></div>
																	</div>
																	<span style="color: rgb(3, 3, 108); weith:30px">{{ $pourcentage }}%</span>
																</div>
															@endforeach
														</td>
														<td>
															<div class="d-flex align-items-center">
																<p style="color: rgb(3, 3, 108); weith:30px" class="mb-0 ms-2">{{ $fournisseur->telephone }}</p>
															</div>
														</td>
														<td class="pe-0">
															<span style="color: rgb(4, 4, 91); weith:30px" class="badge badge-primary light border-0">{{ $fournisseur->statut }}</span>
														</td>
													</tr>
												@endif
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>					
					{{-- ******************************************************************************** --}}
					{{-- ****************Affichage de tous les fournisseurs   ********************** --}}
					{{-- ******************************************************************************** --}}
					<div class="col-xl active-p">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects shorting">
									<div class="tbl-caption">
										<h4 class="heading mb-0" style="color: rgb(51, 0, 255); weith:60px"><b>TOUS LES ARTISTES</b></h4>
									</div>
									<table id="projects-tbl" class="table ItemsCheckboxSec">
										<thead>
											<tr>
												<th style="color: blue; weith:50px" scope="col" class="positionID bg-col-name"><b>Nom Artiste</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Chant</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Progression Chant</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Téléphone</b></th>
												<th style="color: blue; weith:50px" scope="col" class="positionID"><b>Statut</b></th>
											</tr>
										</thead>
										<tbody>
											<!-- Dans votre_vue.blade.php -->
											@foreach ($fournisseurs as $fournisseur)
												<tr
													@if ($fournisseur->notes->isEmpty())
														{{-- onclick="window.location='{{ route('evaluation', $fournisseur->id) }}';" --}}
														style="cursor: pointer;"
													@endif
												>
													<td 
														style="color:rgb(245, 245, 251)); weith:30px"
														class="{{ $fournisseur->notes->isNotEmpty() ? 'bg-success' : 'bg-warning' }}"
													>
														@if ($fournisseur->notes->isEmpty())
															<a href="{{ route('evaluation', $fournisseur->id) }}"
															>
																{{ $fournisseur->nom }} {{ $fournisseur->prenom }}
															</a>
														@else
															{{ $fournisseur->nom }} {{ $fournisseur->prenom }}
														@endif
													</td>
													<td>
														@foreach ($fournisseur->notes as $note)
															<div class="d-flex align-items-center">
																<p style="color: rgb(3, 3, 108); weith:30px" class="mb-0 ms-2">Sans titre</p>
															</div>
														@endforeach
													</td>
													<td class="pe-0">
														@foreach ($fournisseur->notes as $note)
															@php
																$valeur = $note->valeur;
																$pourcentage = 0;
																if ($valeur === 5) {
																	$pourcentage = 100;
																} elseif ($valeur === 4) {
																	$pourcentage = 80;
																} elseif ($valeur === 3) {
																	$pourcentage = 60;
																} elseif ($valeur === 2) {
																	$pourcentage = 30;
																} elseif ($valeur === 1) {
																	$pourcentage = 10;
																}
															@endphp
															<div class="tbl-progress-box">
																<div class="progress">
																	<div class="progress-bar bg-primary"
																		style="width:{{ $pourcentage }}%; height:5px; border-radius:4px;"
																		role="progressbar"></div>
																</div>
																<span style="color: rgb(3, 3, 108); weith:30px">{{ $pourcentage }}%</span>
															</div>
														@endforeach
													</td>
													<td>
														<div class="d-flex align-items-center">
															<p style="color: rgb(3, 3, 108); weith:30px" class="mb-0 ms-2">{{ $fournisseur->telephone }}</p>
														</div>
													</td>
													<td class="pe-0">
														<span style="color: rgb(3, 3, 108); weith:30px" class="badge badge-primary light border-0">{{ $fournisseur->statut }}</span>
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					


				</div>

			</div>
		</div>

		<!--**********************************
            Content body end
        ***********************************-->
@endsection
