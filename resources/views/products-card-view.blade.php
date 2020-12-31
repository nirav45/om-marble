
            @foreach ($products as $product)
                <div class="col-md-3">
					<div class="card shadow-sm border-0">
						<div class="card-body">
							<div class="relative">
								<img src="{{ asset($product->image)}}">
								<div class="absolute flex-column text-center d-flex justify-content-center align-items-center">
									<h3>{{ $product->name }}</h3>
									<a href="{{route('product', ['id' => $product->id, 'category' => $product->category])}}">
										<button class="learn-more">
											<span class="circle" aria-hidden="true">
												<span class="icon arrow"></span>
											</span>
											<span class="button-text">Learn More</span>
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            @endforeach
