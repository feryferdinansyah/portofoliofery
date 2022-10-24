@extends('ibuk')
@section('conten')
@section ('title' , 'project')

<section id="projects">
            <div class="container">
                <div class="row">
                    <div class="col text-center mb-5">
                        <h2>My Projects</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="gambar">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTDHxrHeJEtmDAwp9P7iE74z8THKPm9BZhQA&usqp=CAU" class="card-img-top" alt="gambar">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="gambar">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     